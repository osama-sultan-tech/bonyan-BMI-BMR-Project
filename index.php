<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>


<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <h1 class="text-4xl font-bold  mx-auto mb-6">
        BMI & BMR حساب
    </h1>
    <div class="relative py-3 sm:max-w-xl sm:mx-auto mt-5">
        <div class="absolute inset-0 bg-gradient-to-r dark:from-blue-600 dark:to-indigo-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">

            <div class="max-w-md mx-auto">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-800"> دليل رشاقتك: تحليل الوزن واحتياج الطاقة</h1>
                    <p class="text-gray-500 mt-2"> ( BMR = احتياج الطاقة ) - ( BMI = تحليل الوزن )</p>
                </div>

                <form dir="rtl" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">الاسم الكامل</label>
                        <input type="text" placeholder="أدخل اسمك"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"/>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">العمر</label>
                        <input type="number" placeholder="مثال: 25"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"/>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">الجنس</label>
                        <div class="flex items-center gap-6">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="radio" name="gender"
                                       class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                <span class="mr-2 text-gray-700">ذكر</span>
                            </label>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="radio" name="gender"
                                       class="w-4 h-4 text-pink-600 border-gray-300 focus:ring-blue-500">
                                <span class="mr-2 text-gray-700">أنثى</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">الطول</label>
                        <input type="number" placeholder="0.0 cm"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"/>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">الوزن </label>
                        <input type="number" placeholder="0.0 kg"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"/>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">مستوى النشاط (Activity
                            Level)</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 bg-white outline-none transition-all appearance-none">
                            <option value="sedentary">خامل (عمل مكتبي، قلة حركة)</option>
                            <option value="lightly">نشاط خفيف (تمارين 1-3 أيام)</option>
                            <option value="moderately">نشاط متوسط (تمارين 3-5 أيام)</option>
                            <option value="very">نشط جداً (تمارين يومية شاقة)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">الهدف الرياضي (Fitness
                            Goal)</label>
                        <div class="grid grid-cols-1 gap-3">
                            <label class="flex items-center p-3 border rounded-xl cursor-pointer hover:bg-emerald-50 transition-colors border-gray-200 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                <input type="radio" name="goal"
                                       class="w-4 h-4 text-emerald-600 focus:ring-emerald-500"/>
                                <span class="mr-3 text-sm text-gray-700">إنقاص الوزن (Lose Weight)</span>
                            </label>
                            <label class="flex items-center p-3 border rounded-xl cursor-pointer hover:bg-emerald-50 transition-colors border-gray-200 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                <input type="radio" name="goal"
                                       class="w-4 h-4 text-emerald-600 focus:ring-emerald-500"/>
                                <span class="mr-3 text-sm text-gray-700">المحافظة على الوزن (Maintain Weight)</span>
                            </label>
                            <label class="flex items-center p-3 border rounded-xl cursor-pointer hover:bg-emerald-50 transition-colors border-gray-200 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                <input type="radio" name="goal"
                                       class="w-4 h-4 text-emerald-600 focus:ring-emerald-500"/>
                                <span class="mr-3 text-sm text-gray-700">بناء عضلات (Gain Muscle)</span>
                            </label>
                        </div>
                    </div>

                    <button type="button" onclick="showModal()"
                            class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transform hover:scale-[1.02] transition-all shadow-md">
                        اكتشف مؤشر جسمك
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>


<div id="resultModal"
     class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
    <div class="bg-white rounded-3xl p-8 max-w-sm w-full shadow-2xl transform transition-all scale-100 border border-emerald-100">
        <div class="text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-emerald-100 mb-4">
                <span class="text-2xl">📊</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">نتائج التحليل الخاصة بك</h3>

            <div class="space-y-3 text-right" dir="rtl">
                <div class="p-3 bg-gray-50 rounded-xl">
                    <p class="text-sm text-gray-500">مؤشر كتلة الجسم (BMI):</p>
                    <p id="bmiValue" class="text-xl font-bold text-emerald-600">--</p>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl">
                    <p class="text-sm text-gray-500">احتياجك اليومي (BMR):</p>
                    <p id="bmrValue" class="text-xl font-bold text-blue-600">--</p>
                    <p class="text-xs text-gray-400">سعرة حرارية للبقاء في حالة راحة</p>
                </div>
            </div>

            <button onclick="closeModal()"
                    class="mt-6 w-full bg-gray-900 text-white font-bold py-3 rounded-xl hover:bg-gray-800 transition-all">
                إغلاق
            </button>
        </div>
    </div>
</div>


<script>
    function showModal() {
        document.getElementById('resultModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('resultModal').classList.add('hidden');
    }
</script>
</body>
</html>
