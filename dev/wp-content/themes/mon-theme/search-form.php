<form action="<?php echo esc_url(home_url( '/' )); ?>" class="d-flex ms-2">
    <input type="text" name="s" placeholder="rechercher" class="form-control py-1 px-3" value="<?php echo get_search_query() ?>">
    <input type="submit" class="btn btn-outline-light btn-sm ms-2 p-1">
</form>