<div class="sidebar">
    <ul class="nav nav-tabs nav-stacked">
        <li class="active"><a href="#">Clipping</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Administração</a></li>
        <li><a href="#">Veículos</a></li>
        <li><a href="#">Capas do Dia</a></li>
        <li><a href="#">Grupos</a></li>
    </ul>
</div>
<script src="/js/jquery.js"></script>
<script>
    jQuery(window).on('load',function(){
        $('.sidebar').detach().prependTo(".corpo");
    });
</script>
