<div class="form-group">
    <x-form.input label="الاسم" class="form-control-lg" name="name" :value="$user->name" />
</div>
<div class="form-group">
    <x-form.input label="الايميل" type="email" name="email" :value="$user->email" />
</div>

<div class="form-group">
    <label for="">نوع المستخدم</label>
    <div>
        <x-form.radio name="status" :checked="$user->type" :options="['admin' => 'admin', 'user' => 'user']" />
    </div>
</div>

@if ($confirm_password === false)
    <h1>{{$confirm_password}}</h1>
    <div class="form-group">
        <x-form.input label="كلمة السر" type="password" name="password" />
    </div>
@endif



<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'حفظ' }}</button>
</div>
