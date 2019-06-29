<?php
/**
 * @var $message string
 */
?>
<form action="/new" method="post">
    <div class="form-group">
        <label for="exampleFormControlInput1">Дата покупки</label>
        <input type="date" class="form-control" id="input-name" name="album[date]" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Название альбома</label>
        <input type="text" class="form-control" id="input-name" name="album[name]" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Обложка альбома</label>
        <input type="text" class="form-control" id="input-name" name="album[cover]" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Артист</label>
        <input type="text" class="form-control" id="input-name" name="album[artist]" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Год</label>
        <input type="number" class="form-control" id="input-name" name="album[year]" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Продолжительность</label>
        <input type="number" class="form-control" id="input-name" name="album[duration]" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Цена</label>
        <input type="number" class="form-control" id="input-name" name="album[price]" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Номер комнаты</label>
        <input type="number" class="form-control" id="input-name" name="album[room_number]" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Номер стойки</label>
        <input type="number" class="form-control" id="input-name" name="album[rack_number]" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Номер полки</label>
        <input type="number" class="form-control" id="input-name" name="album[shelf_number]" placeholder="name">
    </div>
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Обложка альбома</th>
        <th scope="col">Название альбома</th>
        <th scope="col">Название артиста</th>
        <th scope="col">Год выпуска</th>
        <th scope="col">Длительность альбома (минут)</th>
        <th scope="col">Стоимость покупки</th>
        <th scope="col">Код хранилища</th>
        <th scope="col">действия</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Обложка альбома</td>
        <td>Название альбома</td>
        <td>Название артиста</td>
        <td>Год выпуска</td>
        <td>Длительность альбома (минут)</td>
        <td>Стоимость покупки</td>
        <td>Код хранилища</td>
        <td>
            <div class="row">
                <a class="btn btn-xs btn-primary btn-sm" href="#">редактировать</a>
            </div>
            <div class="row mt-2">
                <a class="btn btn-danger btn-sm" href="#">удалить</a>
            </div>
        </td>
    </tr>
    </tbody>
</table>
