
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" required>
        <div class="invalid-feedback">
            Введите имя
        </div>
    </div>
    <div class="form-group">
        <label for="surname">Фамилия</label>
        <input type="text" class="form-control" name="surname" id="surname" placeholder="Введите фамилию" required>
        <div class="invalid-feedback">
            Введите фамилию
        </div>
    </div>
    <div class="form-group">
        <label for="phone">Телефон</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Введите телефон" required>
        <div class="invalid-feedback">
            Введите телефон
        </div>
    </div>
    <div class="form-group">
        <label for="email">Почта</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Введите почту" required>
        <div class="invalid-feedback">
            Введите почту в правильном формате
        </div>
    </div>
    <div class="form-group">
        <label for="education_level_id">Уровень образования</label>
        <select class="form-control" name="education_level_id" id="education_level_id" required>
            @foreach($educ_lvl as $level)
                <option value="{{$level->id}}">{{$level->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="review">О себе</label>
        <textarea class="form-control" name="review" id="review" placeholder="Введите имя" required></textarea>
    </div>
    <div class="form-group">
        <label class="custom-file" for="img">Загрузите фото</label>
        <input type="file" class="form-control-file" name="img" id="img" required>
        <div class="invalid-feedback">
            Файл не выбран
        </div>
    </div>

{{--    <button type="submit" class="btn btn-primary" id="send_request_btn">Отправить</button>--}}
    <input type="submit" class="btn btn-primary" id="send_request_btn" value="Отправить">
