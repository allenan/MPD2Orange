<h4 class="alert_info">Edit the main settings for your group's project</h4>
<article class="module width_full">
    <header><h3>Edit Project Settings</h3></header>
    <div class="module_content">
        <?php echo form_open('cms/update_project'); ?>
        <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Project Title</label>
            <?php echo form_input('projectName', $project_info->ProjectName, 'tabindex="1" maxlength="255" id="projectName" type="text" style="width:92%;"'); ?>
        </fieldset>
        <div class="clear"></div>
        <fieldset>
            <label>Summary</label>
            <?php
            $summaryFormData = array(
                'name' => 'projectSummary',
                'id' => 'projectSummary',
                'value' => $project_info->Summary,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
    </div>
    <footer>
        <div class="submit_link">
            <?php echo form_submit('submit', 'Publish', 'class="alt_btn"'); ?>
            <input type="submit" value="Reset">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>

<article class="module width_full">
    <header><h3>Edit Project Details</h3></header>
    <div class="module_content">
        <?php echo form_open('cms/update_project_details'); ?>

        <fieldset>
            <label>Market Segmentation</label>
            <?php
            $summaryFormData = array(
                'name' => 'MarketSegmentation',
                'id' => 'MarketSegmentation',
                'value' => $project_info->MarketSegmentation,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset>
            <label>Target Market</label>
            <?php
            $summaryFormData = array(
                'name' => 'TargetMarket',
                'id' => 'TargetMarket',
                'value' => $project_info->TargetMarket,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset>
            <label>Market Positioning</label>
            <?php
            $summaryFormData = array(
                'name' => 'MarketPositioning',
                'id' => 'MarketPositioning',
                'value' => $project_info->MarketPositioning,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset>
            <label>Qualitative Research</label>
            <?php
            $summaryFormData = array(
                'name' => 'QualitativeResearch',
                'id' => 'QualitativeResearch',
                'value' => $project_info->QualitativeResearch,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset>
            <label>Quantitative Research</label>
            <?php
            $summaryFormData = array(
                'name' => 'QuantitativeResearch',
                'id' => 'QuantitativeResearch',
                'value' => $project_info->QuantitativeResearch,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset style="width:100%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
            <label>Price</label>
            <?php echo form_input('Price', $project_info->Price, 'tabindex="1" maxlength="255" id="Price" type="text" style="width:96%;"'); ?>
        </fieldset>

        <fieldset>
            <label>Country Of Origin</label>
            <?php
            $summaryFormData = array(
                'name' => 'CountryOfOrigin',
                'id' => 'CountryOfOrigin',
                'value' => $project_info->CountryOfOrigin,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset>
            <label>Material Selection</label>
            <?php
            $summaryFormData = array(
                'name' => 'MaterialSelection',
                'id' => 'MaterialSelection',
                'value' => $project_info->MaterialSelection,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset>
            <label>Intellectual Property</label>
            <?php
            $summaryFormData = array(
                'name' => 'IntellectualProperty',
                'id' => 'IntellectualProperty',
                'value' => $project_info->IntellectualProperty,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset>
            <label>Human Factors</label>
            <?php
            $summaryFormData = array(
                'name' => 'HumanFactors',
                'id' => 'HumanFactors',
                'value' => $project_info->HumanFactors,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset>
            <label>Regulations</label>
            <?php
            $summaryFormData = array(
                'name' => 'Regulations',
                'id' => 'Regulations',
                'value' => $project_info->Regulations,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>

        <fieldset>
            <label>Other Info</label>
            <?php
            $summaryFormData = array(
                'name' => 'OtherInfo',
                'id' => 'OtherInfo',
                'value' => $project_info->OtherInfo,
                'rows' => '2'
            ); ?>
            <?php echo form_textarea($summaryFormData); ?>
        </fieldset>
    </div>
    <footer>
        <div class="submit_link">
            <?php echo form_submit('submit', 'Publish', 'class="alt_btn"'); ?>
            <input type="submit" value="Reset">
            <?php echo form_close(); ?>
        </div>
    </footer>
</article>
