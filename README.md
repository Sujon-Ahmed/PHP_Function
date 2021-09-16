# PHP_Function
## Table of Contents
- [trim_function](#trim_function)
- [implode_function](#implode_function)
- [explode_function](#explode_function)
- [is_array_function](#is_array_function)
- [count_function](#count_function)

### trim_function
পিএইচপিতে trim() ফাংশন দিয়ে যেকোন স্ট্রিং থেকে স্পেস কিংবা যেকোন অক্ষর/ক্যারেক্টার মুছে দেয়া যায় (স্ট্রিংটির শুরু কিংবা শেষ থেকে)।
    - [Source_Code](https://github.com/Sujon-Ahmed/PHP_Function/blob/main/01.trim_%20function/index.php)

### implode_function
implode() ফাংশন দিয়ে অ্যারের এলিমেন্টগুলিকে জোড়া দিয়ে স্ট্রিং বানানো যায়।
    - [Source_Code](https://github.com/Sujon-Ahmed/PHP_Function/blob/main/02.imolode_function/index.php)

### explode_function
পিএইচপিতে explode() ফাংশন দিয়ে একটা স্ট্রিংকে একটা ক্যারেক্টার বা স্ট্রিং দিয়ে ভাগ করে অ্যারে বানানো যায়। এই ফাংশনটি implode() এর বিপরীত।
    -[Source_Code](https://github.com/Sujon-Ahmed/PHP_Function/blob/main/03.explode_function/index.php)

### is_array_function
is_array() ফাংশন দিয়ে পিএইচপিতে একটা ভেরিয়েবল অ্যারে কিনা সেটা চেক করা যায়। 
    -[Source_Code](https://github.com/Sujon-Ahmed/PHP_Function/blob/main/04.is_array_function/index.php)

### count_function
পিএইচপিতে অ্যারের এলিমেন্ট সংখ্যা বের করতে (গুনতে) count() ফাংশন ব্যবহার করা হয়।
ফাংশনটি অ্যারের এলিমেন্ট গুনে সেই সংখ্যাটি (integer) রিটার্ন করবে।
১ম প্যারামিটার $array_or_countable এখানে যে অ্যারেটি গুনতে চান সেটার দিতে হবে। অ্যারে ছাড়াও অবজেক্টের কিছু জিনিস গুনতে পারে তবে মুলত অ্যারের এলিমেন্ট গুনতেই এটা বেশি ব্যবহার হয়। প্যারামিটারটির সামনে mixed এজন্য দেয়া হয়েছে যে, প্যারামিটারটি একটি অ্যারেও হতে পারে আবার একটি অবজেক্টও হতে পারে। ২য় প্যারামিটার বাই ডিফল্ট COUNT_NORMAL এটা থাকে। এটা ছাড়া COUNT_RECURSIVE দিতে পারেন। মাল্টিডাইমেনশনাল অ্যারে count এর জন্য এটা দিতে হয়।
মাল্টিডাইমেনশনাল অ্যারে count (COUNT_RECURSIVE প্যারামিটারের ব্যবহার)
<code>
$continents = array(
3.
"Asia" => array("Bangladesh","India","Pakistan"),
4.
"Europe" => array("England","France"),
5.
"Africa" => array("Kenya","Libya","Somalia")
6.
);
7.
echo count($continents,COUNT_RECURSIVE);
</code>
Output : 11
এখানে COUNT_RECURSIVE না দিলে আউটপুট 3 দেখাত কারন তখন সাবঅ্যারেগুলির এলিমেন্ট count করতনা।
    
-[Source_Code](https://github.com/Sujon-Ahmed/PHP_Function/blob/main/05.count_function/index.php)