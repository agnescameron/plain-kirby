<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * This template is responsible for rendering all the subpages of the `notes` page.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>

<main>
  <article class="article">
    <header class="article-header intro">
      <h1><?= $page->title() ?></h1>
      <time class="article-date"><?= $page->date()->toDate('d F Y') ?></time>
      <?php if ($page->tags()->isNotEmpty()) : ?>
      <p class="article-tags tags"><?= $page->tags() ?></p>
      <?php endif ?>
    </header>

    <div class="article-text text">
      <?= $page->text()->kt() ?>
    </div>
  </article>
</main>

<?php snippet('footer') ?>
