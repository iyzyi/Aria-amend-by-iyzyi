<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main" class="col-mb-12 col-8 col-offset-2">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="post-header">
            <h3 class="post-title"><a href="<?php $this->permalink() ?>" class="post-link"><?php $this->title() ?></a></h3>
            <div class="post-meta">
                <span class="post-meta-label post-meta-views"><?php Contents::getPostView($this); ?>次阅读</span>
                <span class="post-meta-label post-meta-date"><?php $this->date(); ?></span>
            </div> 
        </div>
        <div class="post-body">
            <div class="post-content">
                <?php $this->content(); ?>
            </div>
            <script src="<?php $this->options->themeUrl('assets/js/imagesZoom.min.js'); ?>"></script>
            <div id="popup">
                <div class="bg" >
                    <div class="center-in-center">
                        <img src=""/>
                    </div>
                </div>
            </div>
            <div class="imgscale-pack">
                <div class="imgscale-img">
                    <img src=""/>
                </div>
            </div>
            <script>
                imagesZoom();
            </script>
            <?php Contents::getPostOther($this); ?>
            <div class="post-update"><i class="iconfont icon-aria-date"></i>&nbsp;最后一次更新于<?php echo date($this->options->postDateFormat,$this->modified) ?></div>
        </div>
    </article>
    <?php $this->need('comments.php'); ?>

</div><!-- end #main-->
<?php if($this->fields->showTOC) $this->need('TOC.php'); ?>
<?php $this->need('footer.php'); ?>