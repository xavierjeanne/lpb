<?php
// custom block dans gutenberg
// à utiliser avec le plugin block-lab
// https://wordpress.org/plugins/block-lab/
?>
<div class="bouton-block clearfix">
    <div class="bouton-box">
        <a href="mailto:<?php block_field( 'button-mail' ); ?>"><?php block_field( 'button-text' ); ?></a>
    </div>
</div>