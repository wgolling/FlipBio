<?php
// No direct access
defined('_JEXEC') or die; ?>

<section class="flip-bio-container">
  <div class="flip-bio-card">
    <div class="flip-bio-front"
         style="background-color: white;
                background-image: url('<?php echo $photos["front"] ?>');
                background-size:100% 100%;">
        <div class="flip-bio-label"></div>
        <div class="flip-bio-text"></div>
        <div class="flip-bio-label">
            <p><?php echo "Name" ?></p>
        </div>
        <div class="flip-bio-text">
            <p><?php echo $params->get("name") ?></p>
        </div>
        <div class="flip-bio-label">
            <p><?php echo "Title" ?></p>
        </div>
        <div class="flip-bio-text">
            <p><?php echo $params->get("title") ?></p>
        </div>
    </div>
    <div class="flip-bio-back" id="flip-bio-back-<?php echo $module->id ?>"
         style="background-color: white;
                background-image: url('<?php echo $photos["back"] ?>');
                background-size:100% 100%;">
        <div class="flip-bio-label"></div>
        <div class="flip-bio-text"></div>
        <?php foreach (get_object_vars($subfields) as $key => $value) { ?>
            <div class="flip-bio-label">
                <p><?php echo $value->field_label ?></p>
            </div>
            <div class="flip-bio-text">
                <p><?php echo $value->field_answer ?></p>
            </div>
        <?php } ?>
    </div>



<!--     <?php 
    $sides = array('front', 'back');
    foreach ($sides as $side) { ?>
        <div class="flip-bio-<?php echo $side ?>"
             style="background-color: white;
                    background-image: url('<?php echo $photos[$side] ?>');
                    background-size:100% 100%;">
            <?php foreach ($info[$side] as $key => $value) { 
                if ($value == 'N/A') {
                    continue;
                }?>
                <div class="flip-bio-label">
                    <p><?php echo $labels[$side][$key]?></p>
                </div>
                <div class="flip-bio-text">
                    <p><?php echo $value?></p>
                </div>
            <?php } ?>

            <?php foreach (get_object_vars($subfields) as $key => $value) { ?>
                <div class="flip-bio-label">
                    <p><?php echo $value->field_label ?></p>
                </div>
                <div class="flip-bio-text">
                    <p><?php echo $value->field_answer ?></p>
                </div>
            <?php } ?>
        </div>
    <?php }?>
 -->    
  </div>
</section>