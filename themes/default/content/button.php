<div class="container">

    <?php if (!isset($_COOKIE["dpk"]) || "off" === $_COOKIE["dpk"]) { ?>
        <!--<button type="submit" class="btn btn-primary" title="Automatically changed on load for now">Activate DPK mode</button>-->
        <button type="submit" class="btn btn-primary" title="Automatically changed on load for now">DPK mode activated</button>
        <?php
        setcookie("dpk", "on");
    } else { ?>
        <!--<button type="submit" class="btn btn-primary" title="Automatically changed on load for now">Deactivate DPK mode</button>-->
        <button type="submit" class="btn btn-primary" title="Automatically changed on load for now">DPK mode deactivated</button>
        <?php
        setcookie("dpk", "off");
    } ?>

</div>
