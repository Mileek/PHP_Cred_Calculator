{extends file="main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=contentHistory}
    {foreach $data as $item}
        <div style="margin-bottom: 20px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            <strong>Id:</strong> {$item.idwynik}<br />
            <strong>Kwota:</strong> {$item.kwota}<br />
            <strong>Lat:</strong> {$item.lat}<br />
            <strong>Procent:</strong> {$item.procent}<br />
            <strong>Rata:</strong> {$item.rata}<br />
            <strong>Data:</strong> {$item.data}
        </div>
    {/foreach}
{/block}