<?php require_once '../private/initialize.php'; ?>

<?php

$client_hints = get_all_client_hints();

$accept_ch = [];
$has_accept_ch = false;

$critical_ch = [];
$has_critical_ch = false;

// Prepare the Accept-CH header
if (isset($_GET['accept-hints'])) {
    $accept_hints = $_GET['accept-hints'];
    foreach ($accept_hints as $accept_hint => $is_checked) {
        if ($is_checked === '1') {
            $accept_ch [] = $accept_hint;
        }
    }
    if (count($accept_ch) > 0) {
        $has_accept_ch = true;
        header('Accept-CH: ' . implode(', ', $accept_ch));
    } else {
        header('Accept-CH: ');
    }

}

// Prepare the Critical-CH header
if (isset($_GET['critical-hints'])) {
    $critical_hints = $_GET['critical-hints'];
    foreach ($critical_hints as $critical_hint => $is_checked) {
        // The Critical-CH needs to be a subset of Accept-CH, only add it if the hint is in the Accept-CH header
        if ($is_checked === '1' && in_array($critical_hint, $accept_ch)) {
            $critical_ch [] = $critical_hint;
        }
    }
    if (count($critical_ch) > 0) {
        $has_critical_ch = true;
        header('Critical-CH: ' . implode(', ', $critical_ch));
    } else {
        header('Critical-CH: ');
    }
}

?>

<?php $page_title = 'Client Hints Demo'; ?>

<?php include VIEWS_PATH . '/shared/header.php'; ?>

<?php if ($has_accept_ch || $has_critical_ch) { ?>
<div class="container alert alert-success" role="alert">
    The following headers were requested: <br>
    <?php if ($has_accept_ch) { echo '<b>Accept-CH</b>: ' . implode(', ', $accept_ch) . '<br>'; } ?>
    <?php if ($has_critical_ch) { echo '<b>Critical-CH</b>: ' . implode(', ', $critical_ch); } ?>
</div>
<?php } ?>

<div class="container card">
    <form action="<?php echo url_for('/'); ?>" method="GET">
    <div class="p-2">
        <table class="table table-borderless table-hover">
            <thead>
            <tr>
                <th scope="col">Client Hint Header</th>
                <th scope="col">Server should ask?</th>
                <th scope="col">Is critical?</th>
                <th scope="col">Value</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($client_hints as $hint) { ?>
            <tr>
                <th scope="row">
                    <label class="form-check-label" for="<?php echo $hint['name']; ?>">
                        <span class="btn btn-link p-0">
                            <?php echo $hint['name']; ?>
                        </span>
                    </label>
                </th>
                <td>
                    <?php if ($hint['default']) { ?>
                        <span class="badge bg-success">Default</span>
                    <?php } else { ?>
                    <div>
                        <input type="hidden" name="accept-hints[<?php echo $hint['name']; ?>]" value="0">
                        <input class="form-check-input"
                               type="checkbox"
                               name="accept-hints[<?php echo $hint['name']; ?>]"
                               id="<?php echo $hint['name']; ?>"
                               value="1"
                               aria-label="<?php echo $hint['name']; ?>"
                               <?php if (isset($_SERVER[$hint['php_name']])) { echo 'checked'; } ?>>
                        <?php } ?>
                    </div>
                </td>
                <td>
                    <?php if ($hint['default']) { ?>
                        <span class="badge bg-success">Default</span>
                    <?php } else { ?>
                    <div>
                        <input type="hidden" name="critical-hints[<?php echo $hint['name']; ?>]" value="0">
                        <input class="form-check-input"
                               type="checkbox"
                               name="critical-hints[<?php echo $hint['name']; ?>]"
                               id="<?php echo $hint['name']; ?>"
                               value="1"
                               aria-label="<?php echo $hint['name']; ?>">
                        <?php } ?>
                    </div>
                </td>
                <td>
                    <?php
                    if (isset($_SERVER[$hint['php_name']])) {
                        echo $_SERVER[$hint['php_name']];
                    }
                    ?>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="bg-light p-3 border-top border-light">
        <button type="submit" class="btn btn-primary">Submit Request</button>
        <a href="<?php echo url_for('/'); ?>" class="btn btn-link">Reload Page</a>
    </div>
    </form>
</div>

<?php include VIEWS_PATH . '/shared/footer.php'; ?>
