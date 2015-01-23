<div id="header">
    <div id="siteheader">
        <h1><?php print $site_name;?></h1>
        <?php if ($site_slogan): ?>
            <h2><?php print $site_slogan; ?></h2>
        <?php endif; ?>
    </div>

    <?php if ($main_menu): ?>
         <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
    <?php endif; ?>
</div>


<div id="wrapper">
    <div id="content">
        <?php print render($page['content']); ?>
    </div>

        <div id="sidebar">
    <?php if ($page['sidebar_first']): ?>
        <div id="sidebar">
            <?php print render($page['sidebar_first']); ?>
        </div>
    <?php endif; ?>
</div>

<div id="footer">
    <?php if($page['footer']): ?>
        <?php print render($page['footer']); ?>
    <?php endif; ?>
</div>
