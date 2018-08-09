<!--Map Section-->
<section class="map-section">
    <!--Map Box-->
    <div class="map-box">
        <!--Map Canvas-->
        <div class="map-canvas"
            data-zoom="8"
            data-lat="<?php echo esc_js($lat);?>"
            data-lng="<?php echo esc_js($long);?>"
            data-type="roadmap"
            data-hue="#ffc400"
            data-title="<?php echo esc_js($mark_title);?>"
            data-content="<?php echo esc_js($mark_address);?><br><a href='mailto:<?php echo sanitize_email($email);?>'><?php echo sanitize_email($email);?></a>">
        </div>
    </div>
</section>