<?PHP

namespace Steampixel;

class Portal {

    private static array $contents = [];

    // Send something to a portal
    public static function send(string $portal_name, $contents, bool $prepend = false, bool $once = false): void {

        // Create a content array for this portal
        if (!array_key_exists($portal_name, self::$contents)) {
            self::$contents[$portal_name] = [];
        }

        // Convert the content to an array if this is a regular string
        if (!is_array($contents)) {
            $contents = [$contents];
        }

        foreach ($contents as $content) {
            // Add the content to the portal stack
            if ($once) {
                if (!in_array($content, self::$contents[$portal_name])) {
                    if (!$prepend) {
                        self::$contents[$portal_name][] = $content;
                    } else {
                        array_unshift(self::$contents[$portal_name], $content);
                    }
                }
            } else {
                if (!$prepend) {
                    self::$contents[$portal_name][] = $content;
                } else {
                    array_unshift(self::$contents[$portal_name], $content);
                }
            }
        }

    }

    // Open a portal to this point
    public static function open(string $portal_name) {
        // Set the portal name. So it will be replaced later even its empty
        if (!array_key_exists($portal_name, self::$contents)) {
            self::$contents[$portal_name] = [];
        }
        // Print a portal mark
        echo '<!-- Portal:' . $portal_name . ' -->';
    }

    // Compose and Render the portal data
    public static function render(string $string) {

        // Replace the portals inside each other portal
        foreach (self::$contents as $portal_name_replace => $content_replace) {
            foreach (self::$contents as $portal_name => $contents) {

                $content_str = implode('', $contents);

                self::$contents[$portal_name_replace] = str_replace('<!-- Portal:' . $portal_name . ' -->', $content_str, $content_replace);
            }
        }

        // Replace the portals inside the string
        foreach (self::$contents as $portal_name => $contents) {
            $content_str = implode('', $contents);

            $string = str_replace('<!-- Portal:' . $portal_name . ' -->', $content_str, $string);
        }

        // Clear the portals
        self::$contents = [];

        // Return the string
        return $string;
    }

    public static function print(string $string) {
        echo self::render($string);
    }

    // Create buffer
    public static function createBuffer() {
        ob_start();
    }

    // Send buffer
    public static function sendBuffer(string $portal_name, bool $prepend = false, bool $once = false) {
        self::send($portal_name, ob_get_clean(), $prepend, $once);
    }

    // Portal start
    public static function init() {
        ob_start();
    }

    // Send buffer
    public static function compose() {
        self::print(ob_get_clean());
    }

}
