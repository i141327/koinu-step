<?php
//companyページ meta情報
$title = "お申込み｜しつけ、厳選ペット用品の定期便";
$description = "お申込み｜子犬の成長に必要なペット用品の定期便。あなたの子犬に合ったおもちゃ、おやつ、アクセサリー、しつけに必携の育て方ガイドなどを専門家が厳選して毎月お届けします！";
$keyword = "子犬,しつけ,ペット用品";
$h1 = "";
$pagetext = "お申込み";
$pagefile = "products_list";
$canonical = "https://koinu-step.com/products_list";
?>
<?php include(dirname(__FILE__) . "/./metaHeader.php"); ?>

<div id="wrapper" class="<?php echo $pagefile; ?>">
    <?php include(dirname(__FILE__) . "/./header.php"); ?>
    <div id="contents">

<?php include(dirname(__FILE__) . "/./breadcrumb.php"); ?>

      <div id="formWrap">
        <div class="_c-container">
          <h1>お申込み</h1>

          <div class="products-wrap">
            <div class="products-bt kis">
              <a href="https://cart.koinu-step.com/shop/add_to_cart/?va_item_1_111_1=10&va_idx_111_1=1&va_item_1_111_2=13&va_idx_111_2=1&item_qty_111[qty]=1&item_id_111=periodically_order&return_url=http://cart.koinu-step.com">
                <div class="title">
                  <img src="https://<?php echo $host; ?>/images/logo_kis.png" alt="こいぬすてっぷ">
                </div>
                <div class="txt">
                <h5>【1歳までの子犬対象】<br class="sp">こいぬすてっぷ<span>定期購入</span></h5>
                楽しく学ぼう。暮らしに役立つしつけをサポート
                </div>
              </a>
            </div>

            <div class="products-bt wsb">
              <a href="https://cart.koinu-step.com/shop/add_to_cart/?va_item_1_109_5=35&va_idx_109_5=1&item_qty_109[qty]=1&item_id_109=periodically_order&return_url=http://cart.koinu-step.com">
                <div class="title">
                  <img src="https://<?php echo $host; ?>/images/logo_wsb.png" alt="WAN smile BOX">
                </div>
                <div class="txt">
                <h5>【全年齢対象】<br class="sp">WAN smile BOX<span>定期購入</span></h5>
                ずっと元気に。楽しく健やかな暮らしをサポート
                </div>
              </a>
            </div>

            <!-- <div class="products-bt bsb">
              <a href="https://cart.koinu-step.com/shop/add_to_cart/?va_item_0_92_3=21&va_idx_92_3=1&va_item_0_92_4=28&va_idx_92_4=1&item_qty_92[qty]=1&item_id_92=order&return_url=http://cart.koinu-step.com">
                <div class="title">
                  <img src="https://<?php echo $host; ?>/images/logo_bsb.png" alt="WAN smile BOX">
                </div>
                <div class="txt">
                <h5>【全年齢対象】<br class="sp">愛犬のための防災BOX<span>購入</span></h5>
                万が一への備え。災害時に使える防災BOX
                </div>
              </a>
            </div> -->
          </div>

        </div>


        </div>
      </div>

    </div>
    <?php include(dirname(__FILE__) . "/./footer.php"); ?>
</div>

<?php include(dirname(__FILE__) . "/./metaFooter.php"); ?>
