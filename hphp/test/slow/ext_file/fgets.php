<?hh


<<__EntryPoint>>
function main_fgets() {
$tempfile = tempnam(sys_get_temp_dir(), 'vmextfiletest');

$f = fopen($tempfile, 'w');
fputs($f, "testing\nfgets\n\n");
fclose($f);

$f = fopen($tempfile, 'r');
var_dump(fgets($f));
var_dump(fgets($f));
var_dump(fgets($f));

unlink($tempfile);
}
