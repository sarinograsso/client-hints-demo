<?php

function headers_data()
{
    $output = '<div class="container card my-3">';
    $output .= '<div class="card-body">';
    $output .= '<h5 class="card-title">HTTP Headers</h5>';
    $output .= '<table class="table table-hover table-sm">';
    $output .= '<thead>';
    $output .= '<tr>';
    $output .= '<th scope="col" class="w-25">Header</th>';
    $output .= '<th scope="col">Value</th>';
    $output .= '</tr>';
    $output .= '</thead>';
    $output .= '<tbody>';
    foreach (getallheaders() as $arg => $value) {
        $output .= '<tr>';
        $output .= '<td>' . $arg . '</td>';
        if (isset($value)) {
            $output .= '<td class="text-break">' . $value . '</td>';
        }
        else {
            $output .= '<td>-</td>';
        }
        $output .= '</tr>';
    }
    $output .= '</tbody>';
    $output .= '</table>';
    $output .= '</div>';
    $output .= '</div>';
    return $output;
}
