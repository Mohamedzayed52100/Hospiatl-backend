<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: #eee;
        }
        .container{
            width :1200px;
            margin: 0 auto;
        }
        p{
            text-align: justify;
            font-size:19px;
        }
    </style>
</head>
<body>

<div class="container">
    <img  style="width:300px; height: 300px;" src="{{ asset('image') }}/{{ $d->profileimage }}" class="card-img-top" alt="...">
    <h2>name : {{$d->name}}</h2>
    <h3>specialist : {{$d->specialist}}</h3>
    <h3>id : {{$d->id}}</h3>
    <h3>history : </h3>
    <p> (born 16 November 1935), is a Coptic Egyptian-British retired professor of cardiothoracic surgery at Imperial College London, best known for his early work in repairing heart valves with surgeon Donald Ross, adapting the Ross procedure, where the diseased aortic valve is replaced with the person's own pulmonary valve, devising the arterial switch operation (ASO) in transposition of the great arteries, and establishing the heart transplantation centre at Harefield Hospital in 1980 with a heart transplant for Derrick Morris, who at the time of his death was Europe's longest-surviving heart transplant recipient. Yacoub subsequently performed the UK's first combined heart and lung transplant in 1983.

        From 1986 to 2006, he held the position of British Heart Foundation Professor of Cardiothoracic Surgery at the National Heart and Lung Institute, Imperial College Faculty of Medicine. He is the founding editor of the journal Disease Models & Mechanisms.

        His honours and awards include the Bradshaw Lecture from the Royal College of Physicians in 1988, a knighthood in the 1992 New Year Honours, the Texas Heart Institute's Ray C. Fish Award for Scientific Achievement in Cardiovascular Disease in 1998, the International Society for Heart and Lung Transplantation Lifetime Achievement Award in 2004, the European Society of Cardiology's gold medal in 2006, the Order of Merit in 2014, the Lister Medal from the Royal College of Surgeons in 2015 and the Khalaf Ahmad Al Habtoor Achievement Award (KAHAA) in 2019.

        Following retirement from the National Health Service (NHS), he continued to operate on children through his charity, Chain of Hope. In 2008, he co-founded the Magdi Yacoub heart foundation, which launched the Aswan Heart project.</p>
</div>

</body>
</html>
