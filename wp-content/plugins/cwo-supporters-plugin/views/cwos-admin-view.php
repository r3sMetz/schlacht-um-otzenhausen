<?php $all_supporters = cwos_get_supporters();?>
<h1><?php echo CWOS_PLUGINNAME;?></h1>

<div id="cwosVue">
    <!-- Switch UI -->
    <div>
        <button v-on:click="opensAreInView = true" class="button" v-bind:class="{ 'button-primary': opensAreInView}">Supporter offen ({{open.length}})</button>
        <button v-on:click="opensAreInView = false" class="button" v-bind:class="{ 'button-primary': !opensAreInView}">Supporter erledigt ({{done.length}})</button>
    </div>

    <!-- Core UI Open -->
    <div v-if="opensAreInView">
        <table class="u-full-width" v-if="open.length">
            <thead>
            <tr>
                <th>Nr.</th>
                <th>Name</th>
                <th>Adresse</th>
                <th>Optionen</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(openSupporter,index) in open">
                <td>{{index+1}}</td>
                <td>{{openSupporter.name}}</td>
                <td>{{openSupporter.street}}<br>{{openSupporter.zip}} {{openSupporter.city}}</td>
                <td>
                    <button class="button" title="Löschen" v-on:click="deleteSupporterFrom(index,open)">❌</button>
                    <button class="button" title="Ist erledigt" v-on:click="moveSupporter(index,true,open,done,openSupporter)">✔️</button>
                </td>
            </tr>
            </tbody>
        </table>
        <p v-else class="cwos_paragraph">Keine offenen Supporter vorhanden🤓️</p>
    </div>

    <!-- Core UI Done -->
    <div  v-if="!opensAreInView">
        <table class="u-full-width" v-if="done.length">
            <thead>
            <tr>
                <th>Nr.</th>
                <th>Name</th>
                <th>Adresse</th>
                <th>Optionen</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(doneSupporter,index) in done">
                <td>{{index+1}}</td>
                <td>{{doneSupporter.name}}</td>
                <td>{{doneSupporter.street}}<br>{{doneSupporter.zip}} {{doneSupporter.city}}</td>
                <td>
                    <button class="button" title="Löschen" v-on:click="deleteSupporterFrom(index,done)">❌</button>
                    <button class="button" title="Ist doch nicht erledigt" v-on:click="moveSupporter(index,false,done,open,doneSupporter)">🔙️</button>
                </td>
            </tr>
            </tbody>
        </table>
        <p v-else class="cwos_paragraph">Keine erledigten Supporter vorhanden️🤓</p>
    </div>
</div>