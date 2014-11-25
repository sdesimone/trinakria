<div class="meta">
    <span class="date"><?php echo get_the_date(); ?></span> 
    <span class="author"><?php the_author();?></span>
    <span class="tag"><?php the_tags('',' : '); ?></span>
    <span class="cat pull-right"><?php the_category(' | '); ?></span>
</div>