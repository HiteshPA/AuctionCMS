<!--<div>-->
        <article class="container" id="<?= preg_replace('/\s+/', '', $title)?>" name="<?= preg_replace('/\s+/', '', $title)?>">
            <div class="row white">
                <br>
                <h1 class="centered">
                    <?= $page["page_header"]?>
                </h1>
                <hr>
                    <p>
                        <?= $page["page_content"]?>                    </p>
        </article><!-- container -->
</div>
