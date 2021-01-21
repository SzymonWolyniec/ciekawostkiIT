<?php
/* Smarty version 3.1.36, created on 2021-01-20 21:09:12
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\uzytkownicyCollapsible.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60088de813c1a3_58214483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb9b2a7c035f426bb7e717e63ff5e034a5e57c25' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\uzytkownicyCollapsible.tpl',
      1 => 1611173346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60088de813c1a3_58214483 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    function myFnct() 
    {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight)
        {
            content.style.maxHeight = null;
            this.style.borderRadius = '10px';
            
        } 
        else 
        {
            this.style.borderRadius = '10px 10px 0px 0px';
            content.style.maxHeight = content.scrollHeight + "px";
        } 
    }

    for (i = 0; i < coll.length; i++) 
    {
        coll[i].addEventListener("click", myFnct, false);
    }
<?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['expand']->value))) {?>

    <?php echo '<script'; ?>
>

        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) 
        {
            var content = coll[i].nextElementSibling;
            if (!content.style.maxHeight)
            {
                coll[i].classList.toggle("active");
                coll[i].style.borderRadius = '10px 10px 0px 0px';
                content.style.maxHeight = content.scrollHeight + "px";
            } 
        }
    <?php echo '</script'; ?>
>

<?php } elseif ((isset($_smarty_tpl->tpl_vars['collapse']->value))) {?>
    
    <?php echo '<script'; ?>
>

        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) 
        {
            var content = coll[i].nextElementSibling;
            if (content.style.maxHeight)
            {
                content.style.maxHeight = null;
                coll[i].style.borderRadius = '10px';
                
            }   
        }
    <?php echo '</script'; ?>
>
    
<?php }
}
}
