<?php
$catalog = file_get_contents('./catalog/content.json');
$catalog = json_decode($catalog, 1);
?>
<!-----------------content-box-2-------------------->
<section class="content-box box-style-1 box-2">
    <div class="zerogrid">
        <div class="wrap-box"><!--Start Box-->
            <h3 class="t-center" style="font-size: 30px;margin: 10px 0 30px">Articles</h3>
            <div class="row">
            <?php
            foreach ($catalog['texts'] as $key => $text) {
                preg_match('#\<strong\>(.*?)\<\/strong\>#', $text, $matches);
                if (!isset($matches[1])) $matches[1] = '';
            ?>
                <div class="col-1-3">
                    <div class="wrap-col">
                        <article>
                            <div class="post-thumbnail-wrap">
                                <a href="./?article=<?=$key?>&a=3" class="portfolio-box">
                                    <img style="height: 306px" src="./img/<?=$catalog['images'][$key]?>" alt="">
                                    <div class="entry-header ">
                                        <h3 class="entry-title"><?=$matches[1]?></h3>
                                    </div>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            <?php
            if (($key+1) % 3 == 0) echo '</div>';
            if (($key+1) != count($catalog)) echo '<div class="row">';
            }
            ?>
        </div>
    </div>
</section>