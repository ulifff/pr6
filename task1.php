<?php

$textStorage = [];

function add(string $title, string $text, array &$textStorage): void {
    $textStorage[] = [
        'title' => $title,
        'text' => $text,
    ];
};

add('Математика', '2+2', $textStorage);
add('Физика', 'F=ma', $textStorage);

print_r($textStorage);

function remove(int $i, array &$textStorage):bool {
  if (isset($textStorage[$i])) {
      unset($textStorage[$i]);
      return true;
  }
  return false;
};

var_dump(remove(0, $textStorage));
var_dump(remove(5, $textStorage));

print_r($textStorage);

function edit(int $i, string $title = null, string $text = null, array &$textStorage):bool {
    if (isset($textStorage[$i])) {
        if ($title !== null) {
            $textStorage[$i]['title'] = $title;
        }
        if ($text !== null) {
            $textStorage[$i]['text'] = $text;
        }
        return true;
    }
    return false;
};

var_dump(edit(1, 'Алгебра', null, $textStorage));
print_r($textStorage);

var_dump(edit(5, 'Английский', null, $textStorage));

