<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Розрахунок') }}
    </x-slot>

    <!--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-base-900">
                    You're logged in!1
                </div>
            </div>
        </div>
    </div>-->

    <div class="w-full py-2 overflow-hidden">

        <form method="POST" action="{{ route('admin.form_calc.index') }}">
        @csrf
            <div class="py-2">
                <x-admin.form.label for="name">Назва креслення</x-admin.form.label>
                <x-admin.form.input id="name" type="text" name="name" value=""/>
            </div>
        	<div class="py-2">
                <x-admin.form.label for="counterweight_type">Тип противаги</x-admin.form.label>
                <select id="counterweight_type" name="counterweight_type" class="input input-bordered w-full ">
                    <option value="square">Квадратний</option>
                    <option value="triangular">Трикутний</option>
                </select>
            </div>
            <div class="py-2">
                <x-admin.form.label for="frame">Каркас із</x-admin.form.label>
                <select id="frame" name="frame" class="input input-bordered w-full ">
                    <option value="tprofile">Т-профіль</option>
                    <option value="metal_warehouses">Труба з металобази</option>
                </select>
            </div>
            <div class="py-2">
                <x-admin.form.label for="pipe_angle">Кут зарізування труб</x-admin.form.label>
                <select id="pipe_angle" name="pipe_angle" class="input input-bordered w-full ">
                    <option value="45">45%</option>
                    <option value="90">90%</option>
                </select>
            </div>
            <div class="py-2">
                <x-admin.form.label for="gate_opening">Проріз воріт (мм)</x-admin.form.label>
                <x-admin.form.input id="gate_opening" type="number" name="gate_opening" value=""/>
            </div>
            <div class="py-2">
                <x-admin.form.label for="gate_height">Висота воріт від землі (мм)</x-admin.form.label>
                <x-admin.form.input id="gate_height" type="number" name="gate_height" value=""/>
            </div>
            <div class="py-2">
                <x-admin.form.label for="internal_frame_tubes_width">Труби внутрішнього каркасу (ширина мм)</x-admin.form.label>
                <x-admin.form.input id="internal_frame_tubes_width" type="number" name="internal_frame_tubes_width" value="20"/>
            </div>
            <div class="py-2">
                <x-admin.form.label for="internal_frame_tubes_height">Труби внутрішнього каркасу (висота мм)</x-admin.form.label>
                <x-admin.form.input id="internal_frame_tubes_height" type="number" name="internal_frame_tubes_height" value="30"/>
            </div>
            <div class="py-2">
                <x-admin.form.label for="guide">Напрямна</x-admin.form.label>
                <select id="guide" name="guide" class="input input-bordered w-full ">
                    <option value="60x70">60*70мм</option>
                    <option value="72x80">72*80мм</option>
                    <option value="85x95">85*95мм</option>
                </select>
            </div>
            <div class="py-2">
                <x-admin.form.label for="clearance_under_gate">Просвіт під воротами (мм)</x-admin.form.label>
                <x-admin.form.input id="clearance_under_gate" type="number" name="clearance_under_gate" value=""/>
            </div>
            <div class="py-2">
                <x-admin.form.label for="total_length">Загальна довжина (мм)</x-admin.form.label>
                <x-admin.form.input id="total_length" type="number" name="total_length" value=""/>
            </div>
            <div class="py-2">
                <x-admin.form.label for="pages">Сторінки</x-admin.form.label>
                <x-admin.form.input id="pages" type="text" name="pages" value="1,2,3,4,5,6"/>
            </div>
            <div class="py-2">
                <x-admin.form.label for="material">Стовп</x-admin.form.label>
                <select id="material" name="material" class="input input-bordered w-full ">
                    <option value="brick">Цегла</option>
                    <option value="tube">Труба</option>
                </select>
            </div>

            <div class="py-2">
                <label for="wicket" class="inline-flex items-center">
                    <input id="wicket" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="wicket">
                    <span class="ml-2 text-lm text-gray-600">Додати хвіртку?</span>
                </label>
            </div>

            <div class="py-2" id="wicket_param" style="display: none;">
                <x-admin.form.label for="wicket_left">Відстань з лівої сторони креслення мм (хвіртка)</x-admin.form.label>
                <x-admin.form.input id="wicket_left" type="text" name="wicket_left" value=""/>
            </div>

            <div class="py-2" id="wicket_param2" style="display: none;">
                <x-admin.form.label for="wicket_width">Ширина хвіртки (мм)</x-admin.form.label>
                <x-admin.form.input id="wicket_width" type="text" name="wicket_width" value=""/>
            </div>
            <div class="flex justify-end mt-4">
                <x-admin.form.button class="calc_btn">Розрахувати</x-admin.form.button>
            </div>
        </form>
    </div>
</x-admin.wrapper>

<script type="text/javascript">
document.getElementById("wicket").addEventListener("change", function() {
    var wicketParam = document.getElementById("wicket_param");
    var wicketParam2 = document.getElementById("wicket_param2");
    if (this.checked) {
        wicketParam.style.display = "block";
        wicketParam2.style.display = "block";
    } else {
        wicketParam.style.display = "none";
        wicketParam2.style.display = "none";
    }
});

document.querySelector('.calc_btn').addEventListener('click', function(event) {
    event.preventDefault();
    const form = this.closest('form');


    const formData = new FormData();

    const wicketCheckbox = document.getElementById('wicket');

    // Проверяем, нажат ли чекбокс
    if (wicketCheckbox.checked) {
        console.log("Чекбокс 'хвіртка' отмечен");
    } else {
        console.log("Чекбокс 'хвіртка' не отмечен");
    }

    console.log(form.elements);

            let error = 0;
            // Перебираем все элементы формы
            Array.from(form.elements).forEach(function(element) {
                // Проверяем, что элемент имеет атрибут "name"
                if(wicketCheckbox.checked) {
                if (element.name) {
                    if(element.value == '') {
                        error = error+1;
                        document.getElementById(element.name).style.border = '1px solid red';
                    } else {
                        if(element.name !== '_token') {
                            document.getElementById(element.name).style.border = '';
                        }
                    }
                }
                } else {
                    if (element.name && element.name !== 'wicket_left' && element.name !== 'wicket_width') {
                    if(element.value == '') {
                        error = error+1;
                        document.getElementById(element.name).style.border = '1px solid red';
                    } else {
                        if(element.name !== '_token') {
                            document.getElementById(element.name).style.border = '';
                        }
                    }
                }

                }
            });

            

        if (form && error == 0) {
            form.submit();  // Отправка формы
            this.disabled = true;
        }
});
</script>
