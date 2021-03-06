<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($category->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{$category->title or ""}}" required>

<label for="">Описание</label>
<textarea type="text" class="form-control" name="description" placeholder="Описание категории" value="{{$category->description or ""}}" required>
</textarea>
<label for="">Cортировка</label>
<input type="text" class="form-control" name="sort" placeholder="Заголовок категории" value="{{$category->title or ""}}" required>
<label for="">Цвет</label>
<input type="text" class="form-control" name="color" placeholder="Заголовок категории" value="{{$category->title or ""}}" required>


<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$category->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0">-- без родительской категории --</option>
    @include('admin.category.partials.category', ['categories' => $categories])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">