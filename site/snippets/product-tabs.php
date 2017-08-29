<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#standardMix" aria-controls="standardMix" role="tab" data-toggle="tab"><?= l::get('PRODUCT_TAB:STANDARD_MIX') ?></a></li>
    <li role="presentation"><a href="#specialMix" aria-controls="specialMix" role="tab" data-toggle="tab"><?= l::get('PRODUCT_TAB:SPECIAL_MIX') ?></a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="standardMix">
        <ul class="list-unstyled product-tab-list">
            <?php 
            foreach($product->product_standard_mixes()->toStructure() as $standard_mix) {
                snippet('product-tab-list-item', array('mix' => $standard_mix));
            } 
            ?>
        </ul>
    </div>
    <div role="tabpanel" class="tab-pane" id="specialMix">

    </div>
  </div>

</div>