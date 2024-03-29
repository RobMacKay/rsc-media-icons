<?php 

test('getFlag', function () {
    $flag = Rscmedia\Icons\Icons::getFlag('de');
    expect($flag)->toBe('<img src="/assets/flags/3x2/DE.svg" alt="DE Flag" class="h-6" />');
});