<?php
/* Smarty version 3.1.29, created on 2016-05-05 10:28:06
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\fitness\imt.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572b0416545348_58514303',
  'file_dependency' => 
  array (
    '0d4b0a8df8a408a1fe14d1cc263e4d5368a249be' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\fitness\\imt.tpl',
      1 => 1462179963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572b0416545348_58514303 ($_smarty_tpl) {
?>
<div class="col-xs-9">
    <h4 class="block__title" id='center'>Калькулятор индекса массы тела</h4><br/>
    <p>ИМТ (индекс массы тела) помогает большинству людей сориентироваться, все ли в порядке у них с весом. 
        Но, как и у любого правила, здесь тоже есть свои исключения. 
        Не следует ориентироваться на этот показатель тем, кто серьезно занимается пауэрлифтингом или бодибилдингом 
        (формула — формулой, но мышцы по-прежнему намного тяжелее жира), беременным или кормящим женщинам, 
        а также детям и подросткам. Кроме того, данная формула не "работает" применительно к людям, 
        чей рост меньше 150 и больше 190 см. Также предлагаем вам дробное питание для <a href="/article/10005/">сбоса лишнего веса</a> и <a href="/article/10003/">набора мышечной массы</a>. 
        Имейти ввиду, что большие веса при силовых упрожнениях могут навредить вашему организу, поэтому советуем не переусердствавать и не забывать делать кардио в конце тренировки.</p>   
    <form id='center' class="calculator__count-box js-calculate-imt" action="javascript:"> 
            <br />
            <div style="float: right;">
                <span style="padding-right: 10px;">Рост (см)</span> 
                <input type="number" required class="calc_rost" style="float: right;"/>
            </div>
            <br /><br />
            <div style="float: right;">
                <span style="padding-right: 10px;">Вес (кг)</span> 
                <input type="number" required class="calc_ves" style="float: right;"/>
            </div>
            <br /><br />
            <div style="float: right;">
                <span style="padding-right: 10px;">Возраст</span> 
                <input type="number" class="calc_ves" style="float: right;"/>
            </div>
            <br /><br />
            <p><b>Ваш пол:</b><Br>
                <input type="radio" name="sex" value="male"> Мужской<br/>
                <input type="radio" name="sex" value="female"> Женский<br/>
            </p>
            <input id='center' type="submit" value="Посчитать" class="calc_submit" onclick="calc()"/> <br />
        </form> 

        <div id='center' class="calc_imt_dis" style="display: none;">
            <span id='center'>Ваш ИМТ равен: <span class="calc_imt"></span></span>
            <span id='center' class="calc_imt2"></span>
        </div>
</div>
<?php }
}
