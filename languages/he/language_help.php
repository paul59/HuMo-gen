<?php
echo '<div class="help_box">';
echo '
<p class="help_header">סמלים</p>
<p class="help_text">- הסבר: <br><span class="help_explanation">
לצד השמות של אנשים ברשימות ובדוחות תראו את הסמל
<img src="'.CMS_ROOTPATH.'images/reports.gif" alt="Reports">. 
כאשר תעברו מעל סמל זה עם העכבר יופיע חלון קופץ. 
בתוך החלון הקופץ תראו רשימה של סמלים ושמות של דוחות או תרשימים שניתן ליצור לאדם זה.
 (המספר המדויק של הדוחות/התרשימים לכל אדם תלוי בדבר קיום אבות ו/או צאצאים לאדם זה. 
להלן הסבר על כל אחד מהסמלים הללו.
 </span><br><br>
<span class="help_explanation"><img src="'.CMS_ROOTPATH.'images/ancestor_report.gif" alt="Pedigree">&nbsp;<b>דוח/תרשים אבות</b>: 
דוח אבות מציג אדם עם הוריו, סביו וכל אבותיו. 
בדוח אבות משתמשים במספור מיוחד לפיו האדם שבבסיס הוא מספר 1, אביו מספר 2 ואמו מספר 3.
המספר של אב הוא תמיד פי שניים מזה של בנו/בתו ומספר האם הוא גבוה באחד ממספר האב. 
למשל, מספר 40 הוא אביו של מספר 20 , מספר 41 היא אמו של מספר 20.  
<br>
מבין הסמלים המוצגים ניתן לבחור גם תרשים גרפי של דוח האבות.
<br>
אפשר לקרוא יותר על דוחות אבות (באנגלית)  
<a href="http://en.wikipedia.org/wiki/Pedigree_chart" target="blank"><b>כאן</b></a> 
וגם 
<a href="http://en.wikipedia.org/wiki/Ahnentafel" target="blank"><b>כאן.</b></a></span><br><br>
<span class="help_explanation"><img src="'.CMS_ROOTPATH.'images/descendant.gif" alt="Parenteel">&nbsp;<b>דוח/תרשים צאצאים</b>: 
דוח צאצאעים מציג את זוג האבות (אב ואם) או אחד מהם (דור I), ולאחר מכן כל צאצאיהם (דור II, דור III וכו) 
<br>
מבין הסמלים המוצגים ניתן לבחור גם בתרשים גרפי של דוח הצאצאים
</span><br><br>
<span class="help_explanation"><img src="'.CMS_ROOTPATH.'images/outline.gif" alt="Outline report">&nbsp;<b>דוח צאצאים מדורג</b>: 
דוח צאצאים מדורג הוא דוח המציג את כל הצאצאים של אדם (ובני/בנות הזוג שלהם) כאשר כל דור מקבל מספר משלו. 
</span><br><br>
<span class="help_explanation"><img src="'.CMS_ROOTPATH.'images/ancestor_chart.gif" alt="ancestor sheet">&nbsp;<b>גליון אבות</b>: 
גליון אבות הוא טבלה המציגה את האדם הנבחר בבסיס הטבלה ומעליו 4 דורות של אבותיו במשבצות שהולכות וקטנות. 
</span><br><br>
<span class="help_explanation"><img src="'.CMS_ROOTPATH.'images/fanchart.gif" alt="Fanchart">&nbsp;<b>Fanchart</b>: 
זה תרשים "עוגה" שבמרכזו האדם שנבחר ומסביבו, בעיגולים מתרחבים, מופיעים אבותיו. 
תרשים זה נותן תצוגה ברורה ותמציתית של אבותיו של אדם.
אפשר להקליק על כל שם המופיע בתרשים לשם מעבר מהיר לגליון המשפחה של אותו אדם. 
<br> 
ניתן לשנות את גודל התרשים ופרמטרים נוספים באמצאות התפריט המופיע לצד התרשים. 
</span><br>
</p>';
echo '</div>';

echo '<p><div class="help_box">';
echo '
<p class="help_header">תפריט עליון</p>
<p class="help_text">- נושאים בתפריט העליון:<br>
- כפתורי A+ A- RESET
<br>
<span class="help_explanation">
באמצעות כפתורים אלה ניתן להגדיל ולהקטין את גודל האותיות ברוב העמודים. 
באמצעות כפתור RESET ניתן לחזור מהר לגודל ברירת המחדל. 
<br>
שימו לב: כפתור RESET יופיע רק בדפדפנים שתומכים באפשרות זו. 
</span><br><br>
- סמל RSS הכתום (יופיע רק אם אפשרות זו מופעלתת על ידי בעל האתר)
<br>
<span class="help_explanation">
אם תוסיפו סמל זה לקורא ה-RSS שלכם ניתן לראות למי יש יום הולדת.
<br>
(ברשימת האפשרויות בתפריט "כלים" גם תראו אפשרות "ימי הולדת". אפשרות זו תציג רשימה של כל ימי ההולדת בחודש הנוכחי) 

</span><br>

<p class="help_text">- שפות<br>
<span class="help_explanation">
על פס כפתורי התפריט ניתן לראות את דגלי המדינות. באמצעות דגלים אלה ניתן לבחור את שפת התצוגה.
</span><br>
</p>';
echo '</div>';

echo '<p><div class="help_box">';
echo 
'<p class="help_header">כפתור תפריט "אינדקס כללי"</p>
<p class="help_text">- בעל האתר<br>
<span class="help_explanation">
כאשר מקליקים על שם בעל האתר ייפתח טופס לשיגור הודעה לבעל האתר.
 נא מלאו את שמכם וכתובת דואר אלקטרוני, אחרת לא ניתן לענות לכם. 
אם ברצונך לשלוח לבעל האתר מסמך אן תמונות אפשר לבקש באמצעות טופס זה את כתובת המייל שלו. 
לאחר מכן ניתן לשלוח את המסמכים בכל תוכנת דואר אלקטרוני רגילה.
(כתובת המייל לא מתפרסמת באתר על מנת למנוע שליחת דואר זבל).
</span><br><br>
- שדות חיפוש<br>
<span class="help_explanation">
בשדות החיפוש אפשר לחפש על פי שם פרטי ו/או שם משפחה. 
אפשר לחפש עם אחת משלוש אופציות: "מכיל", "מתחיל ב-" או "זהה ל-". 
שימו לב: ליד כפתור "חפש" יש קישור למסך "חיפוש מתקדם".</span><br><br>
- More<br>
<span class="help_explanation">
השורות הבאות הן מובנות מאליהן: הקלק על הקישור שברצונך לעבור אליו</span><br>
</p>';
echo '</div>';

echo '<p><div class="help_box">';
echo '<p class="help_header">כפתור תפריט "אנשים"</p>
<p class="help_text">- אפשרות זו תציג רשימה של כל האנשים המופיעים בעץ המשפחה.<br>
<span class="help_explanation">
רשימה זו כוללת את כל האנשים המופיעים בעץ המשפחה על פי סדר אלפביתי. 
בעמוד אחד יכולים להופיע עד 150 אנשים. 
אפשר ללחוץ על מספרי העמודים על מנת לעבור לעמוד הבא.</span><br><br>
- תצוגה מצומצמת או מורחבת<br>
<span class="help_explanation">
אפשר לבחור בין תצוגה מצומצמת או מורחבת. 
בתצוגה המורחבת מוצגים גם בני הזוג בניגוד לתצוגה המצומצמת</span><br>
</p>';
echo '</div>';

echo '<p><div class="help_box">';
echo '<p class="help_header">כפתור תפריט "שמות"</p>
<p class="help_text">- הסבר:<br>
<span class="help_explanation">כאן תקבלו רשימה עם כל שמות המשפחה תוך ציון מספר האנשים הנושאים שם משפחה זה.</span><br>
</p>';
echo '</div>';

echo '<p><div class="help_box">';
echo '<p class="help_header">כפתור תפריט "מקומות"</p>
<p class="help_text">- הסבר: (כפתור זה ייראה רק אם אפשרות זו הופעלה על ידי בעל האתר)<br>
<span class="help_explanation">כאן ניתן לחפש מקומות לפי מקום לידה, כתובת או מקום קבורה/פטירה <br>
אפשר לבחור עם האפשרויות "מכיל", "מתחיל ב-" או "זהה ל-" <br>
גם כאן ניתן לבחור בין תצוגה מצומצמת או מורחבת. <br>
התוצאות יוצגו בסדר אלפבתי.</span><br>
</p>';
echo '</div>';
echo '<p><div class="help_box">';
echo '<p class="help_header">כפתור תפריט "כלים"</p>
<p class="help_text">הנושאים המופיעים בתת-התפריט של כפתור כלים<br>
<p class="help_text">- מקורות (מופיע רק אם אפשרות זו הופעלה על ידי בעל האתר<br>
<span class="help_explanation">כאן תמצאו רשימה עם כל המקורות שנעשה בהם שימוש במהלך המחקר הגניאלוגי.</span><br>
<p class="help_text">- רשימת ימי הולדת:<br>
<span class="help_explanation">אפשרות זו פותחת רשימה עם כל האנשים שיש להם יום הולדת בחודש הנוכחי. 
אפשר לבחור חודש שונה מברירת המחדל.</span><br>
<p class="help_text">- סטטיסטיקה:<br>
<span class="help_explanation">המידע בטבלה זו מובן מאליו</span><br>
<p class="help_text">- מחשב יחסי משפחה:<br>
<span class="help_explanation">עם מחשב קשרי המשפחה תוכלו לבדוק קשרי דם או יחסי נישואין בין שני אנשים.  
בשדות "שם פרטי" ו"שם משפחה" אפשר למלא שמות, חלקי שמות או להשאיר שדה ריק.     
אחר כך ניתן ללחוץ על "חפש" על מנת לחפש שמות ואחר כך אפשר לבחור את השם הרצוי מתוך רשימת התוצאות. לאחר שנבחרו שני שמות אפשר ללחוץ על "חשב קשרי משפחה". לחיצה על הכפתור עם הסמל "החלפה" מאפשרת להחליף בין שני האנשים. 
</span><br>
<p class="help_text">- צור קשר:<br>
<span class="help_explanation">לחיצה על קישור זה יפתח טופס לשליחת דוא"ל בדומה למוסבר לעיל תחת הכותרת "אינדקס ראשי -> בעל האתר</span><br>
</p>';
echo '</div>';
echo '<p><div class="help_box">';
echo '<p class="help_header">כפתור תפריט "אלבום תמונות"</p>
<p class="help_text">- הסבר: (כפתור זה ייראה רק אם האפשרות הופעלה על ידי בעל האתר)<br>
<span class="help_explanation">כאן תוכלו לראות את כל התמונות הנמצאות בבסיס הנתונים<br>הקליקו על תמונה להגדלתה או הקליקו על השם על מנת לעבור לעמוד המשפחה של אדם זה.<br>
</p>';
echo '</div>';

echo '<p><div class="help_box">';
echo '<p class="help_header">כפתור תפריט "Login"</p>
<p class="help_text">- הסבר:<br>
<span class="help_explanation">אם בעל האתר נתן לכם שם משתמש וסיסמה ניתן כאן להירשם על מנת לראות נתונים החסומים בפני הקהל הרחב (כדוגמת נתונים על אנשים חיים ואף עצי משפחה מוסתרים).<br>
</p>';
echo '</div>';
?>