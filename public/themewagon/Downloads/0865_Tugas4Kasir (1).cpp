#include <iostream>
#include <conio.h>

//deklarasi variable tetap//
#define baju 90000
#define gaun 130000
#define semangka 11000

using namespace std;

main(){
	int b,g,cln,disb,disg,disc,dg,db,dc,hgaun,hbaju,hcln,harga_baju,harga_gaun,harga_cln,PPN,total,sub_total,harga,diskon,jmlh_barang,barang;
	char jwb;
	
	system ("color 9");
	cout << "		Masukan inputan? [Y/y]"<<endl;
	cout << "Banyak baju			:		"; cin>> b;
	cout << "Banyak gaun			:		"; cin>> g;			
	cout << "Banyak celana			:		"; cin>> cln;
		system ("cls");
	
	if(jwb == 'Y '|| jwb == 'y'){
		if(b>=3){
			disb = 0.15;
			db = (hbaju *b)*disb;
			harga_baju= hbaju*b;
		}else if(b>=0 && b< 3){
			db = 0;
			harga_baju = hbaju*baju;
		}
		if(g>=2){
			disg= 0.20;
			dg = (hgaun *g)*disg;
			harga_gaun= hgaun*g;
		}else if(g>=0 && g< 1){
			db = 0;
			harga_gaun = hgaun*gaun;
		}
		if(cln>=2){
			disc = 0.10;
			dc = (hcln *cln)*disc;
			harga_cln= hcln*cln;
		}else if(cln>=0 && cln< 3){
			db = 0;
			harga_cln = hcln*cln;
		}
		 cout << "************************************************************\n";
		 cout << " 						 NOTA BELANJA					   	 \n";
		 cout << "************************************************************\n";
		 cout << "-				Kasir	:								   	-\n";
		 cout << "-				NIM		:									-\n";
		 cout << "************************************************************\n";
		 cout << "	Baju\n";
		 cout << "	Rp. " <<baju <<"/pcs  " << b<<" pcs" <<"   Rp. " <<harga_baju<<endl;
		 cout << "	Gaun\n"; 
		 cout << "	Rp. " <<gaun<<"/pcs  " <<g <<" pcs" <<"   Rp. " <<harga_gaun <<endl;
		 cout << "	Celana\n";
		 cout << "	Rp. " << cln<<"/pcs " <<cln <<" pcs" <<"   Rp. " <<harga_cln <<endl; 
		 cout <<	"************************************************************\n";
		
		 sub_total = (jmlh_barang*barang);
		 PPN = (sub_total = 0.05);
		 total = (sub_total*barang*PPN);
		 
		 cout << "Total Barang		: " <<sub_total <<endl;
		 cout << "Harga				: Rp. " <<harga <<endl;
		 cout << "Diskon				: Rp. " <<diskon <<endl;
		 cout << "Harga yang harus dibayar	: Rp. " <<total <<endl;
		 cout << "************************************************************\n";
		}
	return 0;
}
