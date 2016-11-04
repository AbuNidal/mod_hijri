		var fixd;
        
        var tod=new Date();
        var y = tod.getFullYear();
        var m = tod.getMonth();
        var d = tod.getDate();		
        
		function isGregLeapYear(year)
        {
				return year%4 == 0 && year%100 != 0 || year%400 == 0;
        }

        function gregToFixed(year, month, day)
        {
				day = day + adjust
                var a = Math.floor((year - 1) / 4);
                var b = Math.floor((year - 1) / 100);
                var c = Math.floor((year - 1) / 400);
                var d = Math.floor((367 * month - 362) / 12);

                if (month <= 2)
                        e = 0;
                else if (month > 2 && isGregLeapYear(year))
                        e = -1;
                else
                        e = -2;

                return 1 - 1 + 365 * (year - 1) + a - b + c + d + e + day;
        }

        function Hijri(year, month, day)
        {
                this.year = year;
                this.month = month;
                this.day = day;
                this.toFixed = hijriToFixed;
                this.toString = hijriToString;
        }

        function hijriToFixed()
        {
                return this.day + Math.ceil(29.5 * (this.month - 1)) + (this.year - 1) * 354 +
                         Math.floor((3 + 11 * this.year) / 30) + 227015 - 1;
        }

        function hijriToString()
        {
                var months = new Array(Muharam,Safar,Rabi1,Rabi2,Jumada1,Jumada2,Rejab,Syaban,Ramadan,Syawal,Dzulkaedah,Dzulhijjah);
				return this.day + " " + months[this.month - 1]+ " " + this.year;
        }

        function fixedToHijri(f)
        {
          var i=new Hijri(1100, 1, 1);
           i.year = Math.floor((30 * (f - 227015) + 10646) / 10631);
           var i2=new Hijri(i.year, 1, 1);
           var m = Math.ceil((f - 29 - i2.toFixed()) / 29.5) + 1;
           i.month = Math.min(m, 12);
           i2.year = i.year;
                 i2.month = i.month;
                 i2.day = 1;
           i.day = f - i2.toFixed() + 1;
           return i;
        }
		
		function Hari()
        {
		var weekday=new Array(Ahad,Isnin,Selasa,Rabu,Khamis,Jumaat,Sabtu);
        var dow = tod.getDay();
		document.write(weekday[dow] + ", " );
		}

		function PaparMasihi()
		{
        var monthname=new Array(Januari,Februari,Mac,April,Mei,Jun,Julai,Ogos,September,Oktober,November,Disember);
        document.write( d + " " + monthname[m] + " " + y);
		}

		function PaparHijri()
		{
        var mh = m + 1;
        fixd=gregToFixed(y, mh, d);
        var h=new Hijri(1426, 11, 29);
        h = fixedToHijri(fixd);
        document.write( h.toString() + Simbol);
		}
		
		function Turun()
		{
		document.write("<br \>");
		}