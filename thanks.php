<?php
//contactページ meta情報
$title = "お問い合わせ｜しつけ、厳選ペット用品の定期便";
$description = "お問い合わせ｜子犬の成長に必要なペット用品の定期便。あなたの子犬に合ったおもちゃ、おやつ、アクセサリー、しつけに必携の育て方ガイドなどを専門家が厳選して毎月お届けします！";
$keyword = "子犬,しつけ,ペット用品";
$h1 = "";
$pagetext = "お問い合わせ";
$pagefile = "contact";
$canonical = "https://koinu-step.com/thanks";
?>
<?php include(dirname(__FILE__) . "/./metaHeader.php"); ?>

<div id="wrapper" class="<?php echo $pagefile; ?>">
    <?php include(dirname(__FILE__) . "/./header.php"); ?>
    <div id="contents">
      
    <?php include(dirname(__FILE__) . "/./breadcrumb.php"); ?>

    <div id="formWrap" class="thanks">
    <div class="_c-container">
      <h1>お問い合わせ送信完了</h1>
      <p>お問い合わせありがとうございました。早急にご返信致しますので今しばらくお待ちください。</p>
      <div id="btn_area"><a href="/" class="btn btn_04">TOPページへ戻る</a></div>
    </div>
    </div>

    </div>
    <?php include(dirname(__FILE__) . "/./footer.php"); ?>
</div>

<?php include(dirname(__FILE__) . "/./metaFooter.php"); ?>