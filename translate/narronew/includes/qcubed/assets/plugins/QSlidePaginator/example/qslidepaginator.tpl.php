<?php require('../includes/header.inc.php'); ?>
    <?php $this->RenderBegin(); ?>

    <div class="instructions">
        <h1 class="instruction_title">QSlidePagination</h1>
        If we have a lot of pages (10+), standard paginator can be sometimes 
        unpractical, because it shows only up to ten direct links. This can be changed,
        but if we have a lot of pages shown in header, then the form itself is vast.<br/><br/>

        QSlidePagination is handy, because it introduce a text field in which
        page number can be entered. Page change is triggerd on change and on enter
        key pressed. Also, it has a slider (based on jquery ui slider),
        with which we can slide among pages, then links for previous, next, first and last page.
    </div>

        <?php $this->dtgPersons->Render(); ?>

    <?php $this->RenderEnd(); ?>
<?php require('../includes/footer.inc.php'); ?>
