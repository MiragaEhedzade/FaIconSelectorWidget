<?php

/**
 * FaIconSelectorWidget
 *
 * @author   Miraga Ehedzade <miraga.ehedzade@gmail.com>
 **/
class FaIconSelectorWidget  extends CWidget
{
    public $id;
    public $name;
    public $class;
    public function init()
    {
        parent::init();

    }

    public function run()
    {
        echo '
        
        <select class="'.$this->class.'" id="'.$this->id.'" name="'.$this->name.'"> 
            <optgroup label="Web Application Icons"> 
                <option class="fa fa-adjust" style="display:block" value="fa fa-adjust"> fa fa-adjust </option>
                <option class="fa fa-asterisk" style="display:block" value="fa fa-asterisk"> fa fa-asterisk</option>
                <option class="fa fa-ban" style="display:block" value="fa fa-ban"> fa fa-ban</option>
                <option class="fa fa-bar-chart" style="display:block" value="fa fa-bar-chart"> fa fa-bar-chart</option>
                <option class="fa fa-barcode" style="display:block" value="fa fa-barcode"> fa fa-barcode</option>
                <option class="fa fa-bars" style="display:block" value="fa fa-bars"> fa fa-bars</option>
                <option class="fa fa-battery-empty" style="display:block" value="fa fa-battery-empty"> fa fa-battery-empty</option>
                <option class="fa fa-beer" style="display:block" value="fa fa-beer"> fa fa-beer</option>
                <option class="fa fa-bell" style="display:block" value="fa fa-bell"> fa fa-bell</option>
                <option class="fa fa-bell-slash" style="display:block" value="fa-bell-slash"> fa-bell-slash</option>
                <option class="fa fa-bolt" style="display:block" value="fa fa-bolt"> fa fa-bolt</option>
                <option class="fa fa-book" style="display:block" value="fa fa-book"> fa fa-book</option>
                <option class="fa fa-bookmark" style="display:block" value="fa fa-bookmark"> fa fa-bookmark</option>
                <option class="fa fa-bookmark-o" style="display:block" value="fa fa-bookmark-o"> fa fa-bookmark-o</option>
                <option class="fa fa-briefcase" style="display:block" value="fa fa-briefcase"> fa fa-briefcase</option>
                <option class="fa fa-bullhorn" style="display:block" value="fa fa-bullhorn"> fa fa-bullhorn</option>
                <option class="fa fa-calendar" style="display:block" value="fa fa-calendar"> fa fa-calendar</option>
                <option class="fa fa-camera" style="display:block" value="fa fa-camera"> fa fa-camera</option>
                <option class="fa fa-camera-retro" style="display:block" value="fa fa-camera-retro"> fa fa-camera-retro</option>
                <option class="fa fa-certificate" style="display:block" value="fa fa-certificate"> fa fa-certificate</option>
                <option class="fa fa-check" style="display:block" value="fa fa-check"> fa fa-check</option>
                <option class="fa fa-check-circle" style="display:block" value="fa fa-check-circle"> fa fa-check-circle</option>
                <option class="fa fa-circle" style="display:block" value="fa fa-circle"> fa fa-circle</option>
                <option class="fa fa-circle-o" style="display:block" value="fa fa-circle-o"> fa fa-circle-o</option>
                <option class="fa fa-cloud" style="display:block" value="fa fa-cloud"> fa fa-cloud</option>
                <option class="fa fa-cloud-download" style="display:block" value="fa fa-cloud-download"> fa fa-cloud-download</option>
                <option class="fa fa-cloud-upload" style="display:block" value="fa fa-cloud-upload"> fa fa-cloud-upload</option>
                <option class="fa fa-coffee" style="display:block" value="fa fa-coffee"> fa fa-coffee</option>
                <option class="fa fa-cog" style="display:block" value="fa fa-cog"> fa fa-cog</option>
                <option class="fa fa-cogs" style="display:block" value="fa fa-cogs"> fa fa-cogs</option>
                <option class="fa fa-comment" style="display:block" value="fa fa-comment"> fa fa-comment</option>
                <option class="fa fa-comment-o" style="display:block" value="fa fa-comment-o"> fa fa-comment-o</option>
                <option class="fa fa-comments" style="display:block" value="fa fa-comments"> fa fa-comments</option>
                <option class="fa fa-comments-o" style="display:block" value="fa fa-comments-o"> fa fa-comments-o</option>
                <option class="fa fa-credit-card" style="display:block" value="fa fa-credit-card"> fa fa-credit-card</option>
                <option class="fa fa-creative-commons" style="display:block" value="fa fa-creative-commons"> fa fa-creative-commons</option>
                <option class="fa fa-dashboard" style="display:block" value="fa fa-dashboard"> fa fa-dashboard</option>
                <option class="fa fa-desktop" style="display:block" value="fa fa-desktop"> fa fa-desktop</option>
                <option class="fa fa-download" style="display:block" value="fa fa-download"> fa fa-download</option>
                <option class="fa fa-edit" style="display:block" value="fa fa-edit"> fa fa-edit</option>
                <option class="fa fa-envelope" style="display:block" value="fa fa-envelope"> fa fa-envelope</option>
                <option class="fa fa-envelope-o" style="display:block" value="fa fa-envelope-o"> fa fa-envelope-o</option>
                <option class="fa fa-exchange" style="display:block" value="fa fa-exchange"> fa fa-exchange</option>
                <option class="fa fa-exclamation-circle" style="display:block" value="fa fa-exclamation-circle"> fa fa-exclamation-circle</option>
                <option class="fa fa-external-link" style="display:block" value="fa fa-external-link"> fa fa-external-link</option>
                <option class="fa fa-eye" style="display:block" value="fa fa-eye"> fa fa-eye</option>
                <option class="fa fa-eye-slash" style="display:block" value="fa fa-eye-slash"> fa fa-eye-slash</option>
                <option class="fa fa-fighter-jet" style="display:block" value="fa fa-fighter-jet"> fa fa-fighter-jet</option>
                <option class="fa fa-film" style="display:block" value="fa fa-film"> fa fa-film</option>
                <option class="fa fa-filter" style="display:block" value="fa fa-filter"> fa fa-filter</option>
                <option class="fa fa-fire" style="display:block" value="fa fa-fire"> fa fa-fire</option>
                <option class="fa fa-flag" style="display:block" value="fa fa-flag"> fa fa-flag</option>
                <option class="fa fa-folder-open" style="display:block" value="fa fa-folder-open"> fa fa-folder-open</option>
                <option class="fa fa-folder-open-o" style="display:block" value="fa fa-folder-open-o"> fa fa-folder-open-o</option>
                <option class="fa fa-gift" style="display:block" value="fa fa-gift"> fa fa-gift</option>
                <option class="fa fa-glass" style="display:block" value="fa fa-glass"> fa fa-glass</option>
                <option class="fa fa-globe" style="display:block" value="fa fa-globe"> fa fa-globe</option>
                <option class="fa fa-group" style="display:block" value="fa fa-group"> fa fa-group</option>
                <option class="fa fa-hdd-o" style="display:block" value="fa fa-hdd"> fa fa-hdd</option>
                <option class="fa fa-headphones" style="display:block" value="fa fa-headphones"> fa fa-headphones</option>
                <option class="fa fa-heart" style="display:block" value="fa fa-heart"> fa fa-heart</option>
                <option class="fa fa-heart-o" style="display:block" value="fa fa-heart-o"> fa fa-heart-o</option>
                <option class="fa fa-home" style="display:block" value="fa fa-home"> fa fa-home</option>
                <option class="fa fa-inbox" style="display:block" value="fa fa-inbox"> fa fa-inbox</option>
                <option class="fa fa-info" style="display:block" value="fa fa-info"> fa fa-info</option>
                <option class="fa fa-key" style="display:block" value="fa fa-key"> fa fa-key</option>
                <option class="fa fa-leaf" style="display:block" value="fa fa-leaf"> fa fa-leaf</option>
                <option class="fa fa-laptop" style="display:block" value="fa fa-laptop"> fa fa-laptop</option>
                <option class="fa fa-legal" style="display:block" value="fa fa-legal"> fa fa-legal</option>
                <option class="fa fa-list" style="display:block" value="fa fa-list"> fa fa-list</option>
                <option class="fa fa-lock" style="display:block" value="fa fa-lock"> fa fa-lock</option>
                <option class="fa fa-unlock" style="display:block" value="fa fa-unlock"> fa fa-unlock</option>
                <option class="fa fa-magic" style="display:block" value="fa fa-magic"> fa fa-magic</option>
                <option class="fa fa-magnet" style="display:block" value="fa fa-magnet"> fa fa-magnet</option>
                <option class="fa fa-map-marker" style="display:block" value="fa fa-map-marker"> fa fa-map-marker</option>
                <option class="fa fa-minus" style="display:block" value="fa fa-minus"> fa fa-minus</option>
                <option class="fa fa-minus-square" style="display:block" value="fa fa-minus-square"> fa fa-minus-square</option>
                <option class="fa fa-mobile-phone" style="display:block" value="fa fa-mobile-phone"> fa fa-mobile-phone</option>
                <option class="fa fa-money" style="display:block" value="fa fa-money"> fa fa-money</option>
                <option class="fa fa-music" style="display:block" value="fa fa-music"> fa fa-music</option>
                <option class="fa fa-pencil" style="display:block" value="fa fa-pencil"> fa fa-pencil</option>
                <option class="fa fa-picture-o" style="display:block" value="fa fa-picture-o"> fa fa-picture-o</option>
                <option class="fa fa-plane" style="display:block" value="fa fa-plane"> fa fa-plane</option>
                <option class="fa fa-plus" style="display:block" value="fa fa-plus"> fa fa-plus</option>
                <option class="fa fa-power-off" style="display:block" value="fa fa-power-off"> fa fa-power-off</option>
                <option class="fa fa fa-product-hunt" style="display:block" value="fa fa-product-hunt"> fa fa-product-hunt</option>
                <option class="fa fa-print" style="display:block" value="fa fa-print"> fa fa-print</option>
                <option class="fa fa-qrcode" style="display:block" value="fa fa-qrcode"> fa fa-qrcode</option>
                <option class="fa fa-question" style="display:block" value="fa fa-question"> fa fa-question</option>
                <option class="fa fa-quote-left" style="display:block" value="fa fa-quote-left"> fa fa-quote-left</option>
                <option class="fa fa-quote-right" style="display:block" value="fa fa-quote-right"> fa fa-quote-right</option>
                <option class="fa fa-random" style="display:block" value="fa fa-random"> fa fa-random</option>
                <option class="fa fa-refresh" style="display:block" value="fa fa-refresh"> fa fa-refresh</option>
                <option class="fa fa-remove" style="display:block" value="fa fa-remove"> fa fa-remove</option>
                <option class="fa fa-reorder" style="display:block" value="fa fa-reorder"> fa fa-reorder</option>
                <option class="fa fa-reply" style="display:block" value="fa fa-reply"> fa fa-reply</option>
                <option class="fa fa-rss" style="display:block" value="fa fa-rss"> fa fa-rss</option>
                <option class="fa fa-retweet" style="display:block" value="fa fa-retweet"> fa fa-retweet</option>
                <option class="fa fa-road" style="display:block" value="fa fa-road"> fa fa-road</option>
                <option class="fa fa-rss" style="display:block" value="fa fa-rss"> fa fa-rss</option>
                <option class="fa fa-search" style="display:block" value="fa fa-search"> fa fa-search</option>
                <option class="fa fa-share" style="display:block" value="fa fa-share"> fa fa-share</option>
                <option class="fa fa-share-alt" style="display:block" value="fa fa-share-alt"> fa fa-share-alt</option>
                <option class="fa fa-shopping-cart" style="display:block" value="fa fa-shopping-cart"> fa fa-shopping-cart</option>
                <option class="fa fa-signal" style="display:block" value="fa fa-signal"> fa fa-signal</option>
                <option class="fa fa-sign-in" style="display:block" value="fa fa-sign-in"> fa fa-sign-in</option>
                <option class="fa fa-sign-out" style="display:block" value="fa fa-sign-out"> fa fa-sign-out</option>
                <option class="fa fa-sitemap" style="display:block" value="fa fa-sitemap"> fa fa-sitemap</option>
                <option class="fa fa-sort" style="display:block" value="fa fa-sort"> fa fa-sort</option>
                <option class="fa fa-sort-down" style="display:block" value="fa fa-sort-down"> fa fa-sort-down</option>
                <option class="fa fa-sort-up" style="display:block" value="fa fa-sort-up"> fa fa-sort-up</option>
                <option class="fa fa-spinner" style="display:block" value="fa fa-spinner"> fa fa-spinner</option>
                <option class="fa fa-star" style="display:block" value="fa fa-star"> fa fa-star</option>
                <option class="fa fa-star-o" style="display:block" value="fa fa-star-o"> fa fa-star-o</option>
                <option class="fa fa-star-half" style="display:block" value="fa fa-star-half"> fa fa-star-half</option>
                <option class="fa fa-tablet" style="display:block" value="fa fa-tablet"> fa fa-tablet</option>
                <option class="fa fa-tag" style="display:block" value="fa fa-tag"> fa fa-tag</option>
                <option class="fa fa-tags" style="display:block" value="fa fa-tags"> fa fa-tags</option>
                <option class="fa fa-tasks" style="display:block" value="fa fa-tasks"> fa fa-tasks</option>
                <option class="fa fa-thumbs-down" style="display:block" value="fa fa-thumbs-down"> fa fa-thumbs-down</option>
                <option class="fa fa-thumbs-up" style="display:block" value="fa fa-thumbs-up"> fa fa-thumbs-up</option>
                <option class="fa fa-times" style="display:block" value="fa fa-times"> fa fa-times</option>
                <option class="fa fa-tint" style="display:block" value="fa fa-tint"> fa fa-tint</option>
                <option class="fa fa-trash" style="display:block" value="fa fa-trash"> fa fa-trash</option>
                <option class="fa fa-trophy" style="display:block" value="fa fa-trophy"> fa fa-trophy</option>
                <option class="fa fa-truck" style="display:block" value="fa fa-truck"> fa fa-truck</option>
                <option class="fa fa-umbrella" style="display:block" value="fa fa-umbrella"> fa fa-umbrella</option>
                <option class="fa fa-upload" style="display:block" value="fa fa-upload"> fa fa-upload</option>
                <option class="fa fa-user" style="display:block" value="fa fa-user"> fa fa-user</option>
                <option class="fa fa-users" style="display:block" value="fa fa-users"> fa fa-users</option>
                <option class="fa fa-volume-off" style="display:block" value="fa fa-volume-off"> fa fa-volume-off</option>
                <option class="fa fa-volume-down" style="display:block" value="fa fa-volume-down"> fa fa-volume-down</option>
                <option class="fa fa-volume-up" style="display:block" value="fa fa-volume-up"> fa fa-volume-up</option>
                <option class="fa fa-warning" style="display:block" value="fa fa-warning"> fa fa-warning</option>
                <option class="fa fa-wrench" style="display:block" value="fa fa-wrench"> fa fa-wrench</option>
                <option class="fa fa-hand-peace-o" style="display:block" value="fa fa-hand-peace-o"> fa fa-hand-peace-o</option>
            <optgroup label="Text Editor Icons"> 
                <option class="fa fa-file" style="display:block" value="fa fa-file"> fa fa-file</option>
                <option class="fa fa-file-o" style="display:block" value="fa fa-file-o"> fa fa-file-o</option>
                <option class="fa fa-cut" style="display:block" value="fa fa-cut"> fa fa-cut</option>
                <option class="fa fa-copy" style="display:block" value="fa fa-copy"> fa fa-copy</option>
                <option class="fa fa-paste" style="display:block" value="fa fa-paste"> fa fa-paste</option>
                <option class="fa fa-save" style="display:block" value="fa fa-save"> fa fa-save</option>
                <option class="fa fa-undo" style="display:block" value="fa fa-undo"> fa fa-undo</option>
                <option class="fa fa-repeat" style="display:block" value="fa fa-repeat"> fa fa-repeat</option>
                <option class="fa fa-text-height" style="display:block" value="fa fa-text-height"> fa fa-text-height</option>
                <option class="fa fa-text-width" style="display:block" value="fa fa-text-width"> fa fa-text-width</option>
                <option class="fa fa-align-left" style="display:block" value="fa fa-align-left"> fa fa-align-left</option>
                <option class="fa fa-align-center" style="display:block" value="fa fa-align-center"> fa fa-align-center</option>
                <option class="fa fa-align-right" style="display:block" value="fa fa-align-right"> fa fa-align-right</option>
                <option class="fa fa-align-justify" style="display:block" value="fa fa-align-justify"> fa fa-align-justify</option>
                <option class="fa fa-font" style="display:block" value="fa fa-font"> fa fa-font</option>
                <option class="fa fa-bold" style="display:block" value="fa fa-bold"> fa fa-bold</option>
                <option class="fa fa-italic" style="display:block" value="fa fa-italic"> fa fa-italic</option>
                <option class="fa fa-strikethrough" style="display:block" value="fa fa-strikethrough"> fa fa-strikethrough</option>
                <option class="fa fa-underline" style="display:block" value="fa fa-underline"> fa fa-underline</option>
                <option class="fa fa-link" style="display:block" value="fa fa-link"> fa fa-link</option>
                <option class="fa fa-columns" style="display:block" value="fa fa-columns"> fa fa-columns</option>
                <option class="fa fa-table" style="display:block" value="fa fa-table"> fa fa-table</option>
                <option class="fa fa-th-large" style="display:block" value="fa fa-th-large"> fa fa-th-large</option>
                <option class="fa fa-th" style="display:block" value="fa fa-th"> fa fa-th</option>
                <option class="fa fa-th-list" style="display:block" value="fa fa-th-list"> fa fa-th-list</option>
                <option class="fa fa-list" style="display:block" value="fa fa-list"> fa fa-list</option>
                <option class="fa fa-list-ol" style="display:block" value="fa fa-list-ol"> fa fa-list-ol</option>
                <option class="fa fa-list-ul" style="display:block" value="fa fa-list-ul"> fa fa-list-ul</option>
                <option class="fa fa-list-alt" style="display:block" value="fa fa-list-alt"> fa fa-list-alt</option>
            <optgroup label="Directional Icons"> 
                <option class="fa fa-angle-left" style="display:block" value="fa fa-angle-left"> fa fa-angle-left</option>
                <option class="fa fa-angle-right" style="display:block" value="fa fa-angle-right"> fa fa-angle-right</option>
                <option class="fa fa-angle-up" style="display:block" value="fa fa-angle-up"> fa fa-angle-up</option>
                <option class="fa fa-angle-down" style="display:block" value="fa fa-angle-down"> fa fa-angle-down</option>
                <option class="fa fa-arrow-down" style="display:block" value="fa fa-arrow-down"> fa fa-arrow-down</option>
                <option class="fa fa-arrow-left" style="display:block" value="fa fa-arrow-left"> fa fa-arrow-left</option>
                <option class="fa fa-arrow-right" style="display:block" value="fa fa-arrow-right"> fa fa-arrow-right</option>
                <option class="fa fa-arrow-up" style="display:block" value="fa fa-arrow-up"> fa fa-arrow-up</option>
                <option class="fa fa-caret-down" style="display:block" value="fa fa-caret-down"> fa fa-caret-down</option>
                <option class="fa fa-caret-left" style="display:block" value="fa fa-caret-left"> fa fa-caret-left</option>
                <option class="fa fa-caret-right" style="display:block" value="fa fa-caret-right"> fa fa-caret-right</option>
                <option class="fa fa-caret-up" style="display:block" value="fa fa-caret-up"> fa fa-caret-up</option>
                <option class="fa fa-chevron-down" style="display:block" value="fa fa-chevron-down"> fa fa-chevron-down</option>
                <option class="fa fa-chevron-left" style="display:block" value="fa fa-chevron-left"> fa fa-chevron-left</option>
                <option class="fa fa-chevron-right" style="display:block" value="fa fa-chevron-right"> fa fa-chevron-right</option>
                <option class="fa fa-chevron-up" style="display:block" value="fa fa-chevron-up"> fa fa-chevron-up</option>
                <option class="fa fa-arrow-down" style="display:block" value="fa fa-circle-arrow-down"> fa fa-circle-arrow-down</option>
                <option class="fa fa-arrow-left" style="display:block" value="fa fa-circle-arrow-left"> fa fa-circle-arrow-left</option>
                <option class="fa fa-arrow-right" style="display:block" value="fa fa-circle-arrow-right"> fa fa-circle-arrow-right</option>
                <option class="fa fa-arrow-up" style="display:block" value="fa fa-circle-arrow-up"> fa fa-circle-arrow-up</option>
                <option class="fa fa-circle" style="display:block" value="fa fa-circle"> fa fa-circle</option>
                <option class="fa fa-circle-o" style="display:block" value="fa fa-circle-o"> fa fa-circle-o</option>
            <optgroup label="Video Player Icons"> 
                <option class="fa fa-play-circle" style="display:block" value="fa fa-play-circle"> fa fa-play-circle</option>
                <option class="fa fa-play" style="display:block" value="fa fa-play"> fa fa-play</option>
                <option class="fa fa-pause" style="display:block" value="fa fa-pause"> fa fa-pause</option>
                <option class="fa fa-stop" style="display:block" value="fa fa-stop"> fa fa-stop</option>
                <option class="fa fa-step-backward" style="display:block" value="fa fa-step-backward"> fa fa-step-backward</option>
                <option class="fa fa-fast-backward" style="display:block" value="fa fa-fast-backward"> fa fa-fast-backward</option>
                <option class="fa fa-backward" style="display:block" value="fa fa-backward"> fa fa-backward</option>
                <option class="fa fa-forward" style="display:block" value="fa fa-forward"> fa fa-forward</option>
                <option class="fa fa-fast-forward" style="display:block" value="fa fa-fast-forward"> fa fa-fast-forward</option>
                <option class="fa fa-step-forward" style="display:block" value="fa fa-step-forward"> fa fa-step-forward</option>
                <option class="fa fa-eject" style="display:block" value="fa fa-eject"> fa fa-eject</option>
           <optgroup label="Social Icons"> 
                <option class="fa fa-phone" style="display:block" value="fa fa-phone"> fa fa-phone</option>
                <option class="fa fa-facebook" style="display:block" value="fa fa-facebook"> fa fa-facebook</option>
                <option class="fa fa-twitter" style="display:block" value="fa fa-twitter"> fa fa-twitter</option>
                <option class="fa fa-github" style="display:block" value="fa fa-github"> fa fa-github</option>
                <option class="fa fa-github-alt" style="display:block" value="fa fa-github-alt"> fa fa-github-alt</option>
                <option class="fa fa-linkedin" style="display:block" value="fa fa-linkedin"> fa fa-linkedin</option>
                <option class="fa fa-pinterest" style="display:block" value="fa fa-pinterest"> fa fa-pinterest</option>
                <option class="fa fa-google-plus" style="display:block" value="fa fa-google-plus"> fa fa-google-plus</option>
            <optgroup label="Medical Icons"> 
                <option class="fa fa-hospital-o" style="display:block" value="fa fa-hospital-o"> fa fa-hospital-o</option>
                <option class="fa fa-ambulance" style="display:block" value="fa fa-ambulance"> fa fa-ambulance</option>
                <option class="fa fa-medkit" style="display:block" value="fa fa-medkit"> fa fa-medkit</option>
                <option class="fa fa-stethoscope" style="display:block" value="fa fa-stethoscope"> fa fa-stethoscope</option>
                <option class="fa fa-user-md" style="display:block" value="fa fa-user-md"> fa fa-user-md</option>
        </select>        
        ';
    }

}
?>