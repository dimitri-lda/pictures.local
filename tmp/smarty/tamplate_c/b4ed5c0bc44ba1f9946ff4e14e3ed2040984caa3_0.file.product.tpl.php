<?php
/* Smarty version 3.1.29, created on 2016-05-28 12:10:29
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57496e950afcd0_24140099',
  'file_dependency' => 
  array (
    'b4ed5c0bc44ba1f9946ff4e14e3ed2040984caa3' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\product.tpl',
      1 => 1464430226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57496e950afcd0_24140099 ($_smarty_tpl) {
?>

<div class="col-xs-10" id="p_info">

    <h5 id='center'><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h5>
    <img id='center' width="175" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['img'];?>
">
    
    <div class="col-xs-5">
    <b>Стоимость:</b> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 (<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price']/10000;?>
) 
    <?php if ($_smarty_tpl->tpl_vars['rsProduct']->value['weight'] == 1000) {?>
                руб/кг.
            <?php } else { ?>
                руб.
            <?php }?> 
    <br />
    <b>Страна производства:</b> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['country'];?>
 <br />
    <b>Масса:</b> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['weight']/1000;?>
 кг <br />
    <b>Производитель:</b> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['manufacture'];?>
 <br /><p></p>
    <p id="p_info"><b>Описание:</b><br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p> 
    <p id="p_info"><b>Условия и сроки хранения:</b><br /> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['st_con'];?>
</p> 
    </div>
    <div class="col-xs-5">
        <p id="p_info"><b>Состав:</b><br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['composition'];?>
 </p>
        <table>
            <tbody>
                Пищевая ценность на 100 г
                <tr>
                    <td>Белок</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['protein'];?>
 г</td>
                </tr>
                <tr class="gray">
                    <td>Жиры</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['fats'];?>
 г</td>
                </tr>
                <tr>
                    <td>Углеводы</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['carbohydrates'];?>
 г</td>
                </tr>
                <tr class="gray">
                    <td>Энергетическая ценность</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['kcal'];?>
 ккал/<br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['kj'];?>
 кДж</td>
                </tr>
            </tbody>
        </table>
        <br />
    </div>
</div><?php }
}
