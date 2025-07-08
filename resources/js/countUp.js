import { CountUp } from "countup.js";

const options = {
    startVal: 0,
    duration: 3,
    enableScrollSpy: true,
};
const jml1 = document.querySelector("#jumlahPengurus");
const jml2 = document.querySelector("#jumlahDepartemen");
const jml3 = document.querySelector("#jumlahUKM");
const jml4 = document.querySelector("#jumlahMahasiswa");

let count1 = new CountUp(jml1, 64, options);
let count2 = new CountUp(jml2, 11, options);
let count3 = new CountUp(jml3, 13, options);
let count4 = new CountUp(jml4, 1300, options);

if (jml1) {
    count1.start();
    count2.start();
    count3.start();
    count4.start();
} else {
    console.error(count1.error);
    console.error(count2.error);
    console.error(count3.error);
    console.error(count4.error);
}
