#include <iostream>
#include <stdio.h>
#include <iomanip>
#include <conio.h>

using namespace std;
int main() {
	struct mahasiswa{
		char nim [10], nama[50], prodi [30];
	}mhs;
	
	struct  transkrip_nilai{
		char kode[5], matakuliah[25], sifat[11];
		int sks,bobot,jmlhsks,n;
		float jmlhbobot, jmlh, ipk, nilai=0;
		string ket; 
	}transkrip;
		cout<<"Nama \t: "; cin>>mhs.nama;
		cout<<"NIM \t: "; cin>>mhs.nim;
		cout<<"Prodi \t: "; cin>>mhs.prodi;
		cout<<"Input banyak mata kuliah = ";cin>>transkrip.n;
		for(int i=1;i<=transkrip.n;i++){
		cout<<"\n----------------";
		cout<<"\nData ke = "<<i;
		cout<<"\n----------------\n";
		cin.ignore();
		cout<<endl;
		cout<<"Mata Kuliah \t: "; cin>>transkrip.matakuliah;
		cout<<"Sifat \t: "; cin>>transkrip.sifat;
		cout<<"SKS \t: "; cin>> transkrip.sks;
		cout<<"Nilai \t: "; cin>> transkrip.nilai;
		
		if(transkrip.nilai>81 && transkrip.nilai<=100)
		{transkrip.ket="A";}
		else if(transkrip.nilai>61 && transkrip.nilai<=81)
		{transkrip.ket="B";}
		else if(transkrip.nilai>41 && transkrip.nilai<=61)
		{transkrip.ket="C";}                            
		else if(transkrip.nilai>21 && transkrip.nilai<=41)
		{transkrip.ket="D";}
		else
		{transkrip.ket="E";}
		cout<<"\nNilai : "<<transkrip.ket;
		cout<<endl;
		
		if(transkrip.ket=="A")
		transkrip.bobot=4;
		else if(transkrip.ket=="B")
		transkrip.bobot=3;
		else if(transkrip.ket=="C")
		transkrip.bobot=2;
		else if(transkrip.ket=="D")
		transkrip.bobot=1;
		else if (transkrip.ket=="E")
		transkrip.bobot=0;
		cout<<"Nilai : "<<transkrip.bobot;
		transkrip.jmlhbobot=transkrip.bobot*transkrip.sks;
		cout<<endl;
		cout<<"\nTotal Nilai : "<<transkrip.jmlhbobot;
	}
		transkrip.jmlhsks=transkrip.sks;
		
		transkrip.jmlh=transkrip.jmlhbobot;
		transkrip.ipk=transkrip.jmlh/transkrip.jmlhsks;
		cout<<"\n===================\n";
		cout<<"\nTotal SKS          = "<<transkrip.jmlhsks;
		cout<<"\nTotal Semua Nilai  = "<<transkrip.jmlh;
		cout<<"\nIPK                = "<<setiosflags(ios::fixed)<<setprecision(2)<<transkrip.ipk;
getch();		
}
