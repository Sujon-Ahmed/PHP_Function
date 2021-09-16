# PHP_Function
## Table of Contents
- [trim_function](#trim_function)
- [implode_function](#implode_function)
- [explode_function](#explode_function)
- [is_array_function](#is_array_function)
- [count_function](#count_function)
- [substr_function](#substr_function)

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
<pre>
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
</pre>
Output : 11
এখানে COUNT_RECURSIVE না দিলে আউটপুট 3 দেখাত কারন তখন সাবঅ্যারেগুলির এলিমেন্ট count করতনা।
   -[Source_Code](https://github.com/Sujon-Ahmed/PHP_Function/blob/main/05.count_function/index.php)

### substr_function
পিএইচপিতে একটা স্ট্রিং থেকে নির্দিষ্ট কোন অংশ বের করার দরকার হলে substr() ফাংশন ব্যবহার করা হয়।<br>  
ডেমো প্যারামিটারসহ সংকেত <br>
<pre>
<code>string substr(string $string, int $start[, int $length])</code>
</pre>
ফাংশনটি পরিবর্তিত স্ট্রিংটি রিটার্ন করবে।

<b>১ম প্যারামিটার</b> স্ট্রিং হবে যেটা থেকে তার কোন অংশ আলাদা করতে চাচ্ছেন (স্ট্রিংটি অবশ্যই কমপক্ষে এক অক্ষরের বা ক্যারেক্টারের হতে হবে)।

<b>২য় প্যারামিটার</b> পূর্নসংখ্যা হবে। এখানে দিতে হবে ঐ সংখ্যা যে পজিশন থেকে স্ট্রিংটির ক্যারেক্টার আলাদা করতে চাচ্ছেন। 0 থেকে শুরু হবে। যেমন "sujonahmed" স্ট্রিংটির 0 পজিশনের ক্যারেক্টার/অক্ষর হচ্ছে "s", 1 নম্বর পজিশনের ক্যারেক্টার হল "u" এভাবে...। যদি এই প্যারামিটারটির ($start) মান ঋনাত্নক দেন তাহলে উল্টো দিক থেকে শুরু হবে এবং ঐ সংখ্যা পরিমান ক্যারেক্টার আলাদা করে সেটা রিটার্ন করবে। <br>
<strong>Example</strong>
<pre>
<code>
    $x = "sujonahmed";
    echo substr($x,1);
</code>
</pre>
Result : ujonahmed <br>
$start এর মান ১ দেয়াতে ১ নম্বর ক্যারেক্টার থেকে শুরু করে বাকি ক্যারেক্টারগুলি সহ স্ট্রিংটি রিটার্ন করছে। যদি মান -2 দিতাম তাহলে "sujonahmed" স্ট্রিংটির ডানদিক থেকে গননা শুরু হবে এবং আউটপুট হবে "ed", -3 দিলে আউটপুট ৩টি ক্যারেক্টার আসবে "med" এভাবে... <br>

<b>৩য় প্যারামিটার</b> $length হল কতটি ক্যারেক্টার তুলে আনতে চান সেটার সংখ্যা, এটা ঐচ্ছিক প্যারামিটার তাই বাই ডিফল্ট $start থেকে পরেরগুলি সব তুলে আনে। আর যদি সব না লাগে তাহলে যতটি লাগবে সেই সংখ্যা $length এর স্থলে দিতে হবে।

যেমন আমি যদি "sujonahmed" স্ট্রিংটির ৩ নম্বর ক্যারেক্টার/অক্ষর থেকে নিয়ে এরপরের ২টি ক্যারেক্টার তুলে আনতে চাই তাহলে <br>
<strong>Example</strong>
<pre>
<code>
    $x = "sujonahmed";
    echo substr($x,2,2);
</code>
</pre>
Result : jo
<br>
যদি $length এর মান ঋনাত্নক দেন তাহলে ঐ সংখ্যা পরিমান ক্যারেক্টার শেষ থেকে বাদ দিবে। <br>
<strong>Example</strong>
<pre>
<code>
    $x = "sujonahmed";
    echo substr($x,2,-3);
</code>
</pre>
আউটপুট (-3 দেয়াতে শেষ থেকে ৩টি ক্যারেক্টার med বাদ দিয়েছে এবং ২ নং পজিশন থেকে ক্যারেক্টার নেয়া শুরু করেছে) <br>
Result : jonah <br>
<strong>** $length এর মান 0, FALSE বা NULL দিলে ফাকা স্ট্রিং রিটার্ন করবে।</strong>
** যদি $string (১ম প্যারামিটার) এ যে পরিমান ক্যারেক্টার আছে তার চেয়ে বেশি $start (২য় প্যারামিটারের) এর মান দেন তাহলে false রিাটর্ন করবে। এমনকি সমান হলেও false রিাটর্ন করবে। যেমন
<br>
<pre>
<code>
    $x = "sujonahmed";
    echo substr($x,10);
</code>
</pre>
Result : bool(false)
<br>

-[Source_Code](https://github.com/Sujon-Ahmed/PHP_Function/blob/main/06.substring_function/index.php)