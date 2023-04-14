<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layout/boxed')->assign([
  'title' => 'DPK',
  'subtitle' => 'Toggle DPK mode',
  'lang' => 'en'
])->print();

// Send contents to the main contents portal
Portal::send('contents-main', [

  // Add button component
  Component::create('content/button')

]);
