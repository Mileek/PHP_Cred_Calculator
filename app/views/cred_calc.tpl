{extends file="main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

    <section>
        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
            <form action="{$conf->action_root}calcCompute" method="post">
                <div class="fields">
                    <div class="field">
                        <label for="id_amount">Kwota kredytu: </label>
                        <input id="id_amount" type="text" name="amount" value="{$form->amount}" /><br />
                    </div>
                    <div class="field">
                        <label for="id_years">Ilość lat: </label>
                        <input id="id_years" type="text" name="years" value="{$form->years}" /><br />
                    </div>
                    <div class="field">
                        <label for="id_interest">Oprocentowanie [%]: </label>
                        <input id="id_interest" type="text" name="interest" value="{$form->interest}" /><br />
                    </div>
                </div>
                <ul class="actions">
                    <li><input class="primary" type="submit" value="Oblicz" /></li>
                </ul>
            </form>
        </div>
    </section>
    <section class="split">
        <section>
            {* wyświeltenie listy błędów, jeśli istnieją *}
            <span class="icon solid alt fa-envelope"></span>
            <h3>Lista błędów:</h3>
            {if $msgs->isError()}
                <div class="contact-method">
                    <ol class="errors">
                        {foreach $msgs->getErrors() as $msg}
                            {strip}
                                <li>{$msg}</li>
                            {/strip}
                        {/foreach}
                    </ol>
                </div>
            {/if}
        </section>

        <section>
            <span class="icon solid alt fa-poll-h"></span>
            <h3>Wynik:</h3>
            {if (isset($result->result) && isset($result->fullResult))}
                <div class="contact-method">
                    <h4> Rata kredytu: {$result->result} </h4>
                    <h4> Całą kwota do zapłaty: {$result->fullResult} </h4>
                </div>
            {/if}
        </section>

        <section>
            {* wyświeltenie listy informacji, jeśli istnieją *}
            <span class="icon solid alt fa-envelope"></span>
            <h3>Informacje: </h3>
            {if $msgs->isInfo()}
                <div class="contact-method">
                    <ol class="infos">
                        {foreach  $msgs->getInfos() as $msg}
                            {strip}
                                <li>{$msg}</li>
                            {/strip}
                        {/foreach}
                    </ol>
                </div>
            {/if}
        </section>
        </div>
    </section>
{/block}