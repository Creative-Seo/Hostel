<div id="bron" class="pms">
    <p class="pms-h1"><?php echo $pms_h1_1;?></p>
    <div class="pms-form row">
        <div class="col-xs-12"><div class="form-group"><div class="input-group date" id='dtm1'>
            <input type="text" class="form-control" id="bron-dfrom" placeholder="<?php echo $pms_dfrom;?>">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div></div></div>
        <div class="col-xs-12"><div class="form-group"><div class="input-group date" id='dtm2'>
            <input type="text" class="form-control" id="bron-dto" placeholder="<?php echo $pms_dto;?>">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div></div></div>
        <div class="col-xs-6"><div class="form-group">
            <label><?php echo $pms_adults;?>:&nbsp</label>
            <input type="number" max="99" min="1" class="form-control" id="bron-adults" value="1">
        </div></div>
        <div class="col-xs-6"><div class="form-group">
            <label><?php echo $pms_children;?>:&nbsp</label>
            <input type="number" max="99" min="0" class="form-control" id="bron-children" value="0">
        </div></div>
        <div class="col-xs-12"><div class="form-group"><div class="checkbox">
            <label><input type="checkbox" id="bron-offer" checked> <a href="javascript: void(0);" target="_blank"><?php echo $pms_offer;?></label>
        </div></div></div>
    </div>
    <div class="pms-footer">
        <div class="pms-a"><a class="pms-btn" href="javascript:void(0)" id="bron-btn"><?php echo $pms_btn_1;?></a></div><br>
     <!--   <div class="pms-a"><a class="pms-href" href="javascript:void(0)" id="bron-href"><?php echo $pms_href_1;?></a></div>-->
    </div>
</div>
<div id="otmena" class="pms" style="display: none;">
    <p class="pms-h1"><?php echo $pms_h1_2;?></p>
    <div class="pms-form row">
        <div class="col-xs-12"><div class="form-group">
            <label><?php echo $pms_code;?>:&nbsp</label>
            <input type="text" class="form-control" placeholder="<?php echo $pms_code;?>" id="otmena-code">
        </div></div>
        <div class="col-xs-12"><div class="form-group">
            <label><?php echo $pms_email;?>:&nbsp</label>
            <input type="email" class="form-control" placeholder="<?php echo $pms_email;?>" id="otmena-email">
        </div></div>
        <div class="col-xs-12"><div style="visibility: hidden" class="pms-ok" id="pms-ok"><?php echo $pms_ok;?></div></div>
    </div>
    <div class="pms-footer">
        <div class="pms-a"><a class="pms-btn" href="javascript:void(0)" id="otmena-btn"><?php echo $pms_btn_2;?></a></div>
        <div class="pms-a"><a class="pms-href" href="javascript:void(0)" id="otmena-href"><?php echo $pms_href_2;?></a></div>
    </div>
</div>
