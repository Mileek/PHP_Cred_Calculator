{extends file="../templates/main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}
    <section>
        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">

            <form action="{$app_url}/app/cred_calc.php" method="post">
                <div class="fields">
                    <div class="field">
                        <label for="id_amount">Kwota kredytu: </label>
                        <input id="id_amount" type="text" name="amount" value="{$amount}" /><br />
                    </div>
                    <div class="field">
                        <label for="id_years">Ilość lat: </label>
                        <input id="id_years" type="text" name="years" value="{$years}" /><br />
                    </div>
                    <div class="field">
                        <label for="id_interest">Oprocentowanie [%]: </label>
                        <input id="id_interest" type="text" name="interest" value="{$interest}" /><br />
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
            {if (isset($messages))}
                {if (count($messages) > 0)}
                    <div class="contact-method">

                        <ol class="errors">
                            {foreach $messages as $msg}
                                {strip}
                                    <li>{$msg}</li>
                                {/strip}
                            {/foreach}
                        </ol>
                    </div>
                {/if}
            {/if}
        </section>
        <section>
            <span class="icon solid alt fa-poll-h"></span>
            <h3>Wynik:</h3>
            {if (isset($result) && isset($fullResult))}
                <div class="contact-method">
                    <h4> Rata kredytu: {$result} </h4>
                    <h4> Całą kwota do zapłaty: {$fullResult} </h4>
                </div>
            {/if}
        </section>
        <section>
            {* wyświeltenie listy informacji, jeśli istnieją *}
            <span class="icon solid alt fa-envelope"></span>
            <h3>Informacje: </h3>
            {if isset($infos)}
                {if count($infos) > 0}
                    <div class="contact-method">

                        <ol class="infos">
                            {foreach  $infos as $msg}
                                {strip}
                                    <li>{$msg}</li>
                                {/strip}
                            {/foreach}
                        </ol>
                    </div>
                {/if}
            {/if}
        </section>

        </div>
    </section>
{/block}