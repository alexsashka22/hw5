<?php
  // $json = '[
  // {
  //     "firstName": "Иван",
  //     "lastName": "Иванов",
  //     "address": {
  //        "streetAddress": "Московское ш., 101, кв.101",
  //        "city": "Ленинград",
  //        "postalCode": 101101
  //     },
  //     "phoneNumbers": [
  //        "812 123-1234",
  //        "916 123-4567"
  //      ]
  // },
  // {
  //    ...
  // },
  // {
  //   ...
  //  }
  // ]';

$json = file_get_contents(__DIR__ . '/phonenambers.json');
// var_dump($json);
$poeple = (json_decode($json, true));

// echo "<pre>";
// var_dump($poeple);
// ?>

<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Home work 5 - JSON</title>
  <style media="screen">
    table {
      border: 2px solid black;
      border-collapse: collapse;
      padding: 5px;
    }

    thead {
      background: #91adb6;
      text-align: center;
      padding: 5px;
    }

    thead tr td {
      padding: 5px;
      border: 1px solid black;
    }

    tbody {
      text-align: left;
      padding: 5px;
      border: 1px solid black;
    }

    tbody td {
      padding: 5px;
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <h1>Пример JSON-файла:</h1>
  <table>
    <thead>
      <tr>
        <td rowspan="2">#</td>
        <td rowspan="2">Имя</td>
        <td rowspan="2">Фамилия</td>
        <td colspan="3">Адрес</td>
        <td colspan="2">Телефон</td>
      </tr>
      <tr>
        <td>Улица, дом, кв.</td>
        <td>Город</td>
        <td>Индекс</td>
        <td>Рабочий</td>
        <td>Мобилный</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($poeple as $i => $person) { ?>
      <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $person['firstName']; ?></td>
        <td><?php echo $person['lastName']; ?></td>
        <td><?php echo $person['address']['streetAddress']; ?></td>
        <td><?php echo $person['address']['city']; ?></td>
        <td><?php echo $person['address']['postalCode']; ?></td>
        <td><?php echo $person['phoneNumbers'][0]; ?></td>
        <td><?php echo $person['phoneNumbers'][1]; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>

</body>

</html>
