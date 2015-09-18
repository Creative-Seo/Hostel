<div id="bron" class="pms">
    <p class="pms-h1">Онлайн бронирование</p>
    <div class="pms-form row">
        <div class="col-xs-12"><div class="form-group"><div class="input-group date" id='dtm1'>
            <input type="text" class="form-control" id="bron-dfrom" placeholder="Дата заезда">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div></div></div>
        <div class="col-xs-12"><div class="form-group"><div class="input-group date" id='dtm2'>
            <input type="text" class="form-control" id="bron-dto" placeholder="Дата отъезда">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div></div></div>
        <div class="col-xs-6"><div class="form-group">
            <label>Взрослые:&nbsp</label>
            <input type="number" max="99" min="1" class="form-control" id="bron-adults" value="2">
        </div></div>
        <div class="col-xs-6"><div class="form-group">
            <label>Дети:&nbsp</label>
            <input type="number" max="99" min="0" class="form-control" id="bron-children" value="0">
        </div></div>
    </div>
    <div class="pms-footer">
        <div class="pms-a"><a class="pms-btn" href="javascript:void(0)" id="bron-btn">Забронировать</a></div>
        <div class="pms-a"><a class="pms-href" href="javascript:void(0)" id="bron-href">Отменить бронирование</a></div>
    </div>
</div>
<div id="otmena" class="pms" style="display: none;">
    <p class="pms-h1">Отмена бронирования</p>
    <div class="pms-form row">
        <div class="col-xs-12"><div class="form-group">
            <label>Код:&nbsp</label>
            <input type="text" class="form-control" placeholder="Код" id="otmena-code">
        </div></div>
        <div class="col-xs-12"><div class="form-group">
            <label>E-mail:&nbsp</label>
            <input type="email" class="form-control" placeholder="E-mail" id="otmena-email">
        </div></div>
        <div class="col-xs-12"><div style="visibility: hidden" class="pms-ok" id="pms-ok">Ваше бронирование было отменено</div></div>
    </div>
    <div class="pms-footer">
        <div class="pms-a"><a class="pms-btn" href="javascript:void(0)" id="otmena-btn">Отменить бронирование</a></div>
        <div class="pms-a"><a class="pms-href" href="javascript:void(0)" id="otmena-href">Цены и наличие</a></div>
    </div>
</div>
