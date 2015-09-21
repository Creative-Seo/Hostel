<!--Breadcrumbs-->
<div class="breadcrumb-container">
  <div class="breadcrumb">
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<?php if ($meta_lang == 'en') { ?>
      <a href="/en/" itemprop="url"><span itemprop="title"><?php echo $bread;?></span></a>
<?php } else { ?>
      <a href="/" itemprop="url"><span itemprop="title"><?php echo $bread;?></span></a>
<?php } ?>
    </span>
    <span class="divider"> &#8594; </span>
<?php 
if(isset($breadcrumb2)) 
{
	if(!(isset($breadcrumb2_url))) {$breadcrumb2_url = '/'.$self[1];}
    echo '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/en', $breadcrumb2_url,
	'" itemprop="url"><span itemprop="title">',$breadcrumb2,'</span></a></span><span class="divider"> &#8594; </span>';
}
if(isset($breadcrumb3)) 
{
	if(!(isset($breadcrumb3_url))) {$breadcrumb3_url = '/'.$self[1].'/'.$self[2];}
    echo '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/en', $breadcrumb3_url,
	'" itemprop="url"><span itemprop="title">',$breadcrumb3,'</span></a></span><span class="divider"> &#8594; </span>';
}
?>      
    <span class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a href="<?php echo $_SERVER['REQUEST_URI'];?>" itemprop="url"><span itemprop="title"><?php echo $breadcrumb;?></span></a>
    </span>
  </div>
</div>
<!--Breadcrumbs-->