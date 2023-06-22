<?php $radio_sertao  = get_field('ps_radio_sertao', 'option'); if($radio_sertao): ?>
<div class="ps-top-radio position-relative">
    <a href="#" title="Tocar rádio">
        <i class="fa-solid fa-circle-play"></i>
    </a>
    <div class="py-1 px-1 mt-2 text-light rounded-1 overflow-hidden ps-top-playlist">
        <span></span>
    </div>
</div>
<?php endif; ?>