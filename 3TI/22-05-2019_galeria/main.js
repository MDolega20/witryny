let globalPath = "img/",
obj = {
    currentId: null,
    firstId: null,
    lastId: null,
    gallery: [
        {
            id: 0,
            name: "lorem ipsum",
            path: globalPath + "image_1.png"
        },
        {
            id: 1,
            name: "lorem ipsum",
            path: globalPath + "image_2.jpeg"
        },
        {
            id: 2,
            name: "lorem ipsum",
            path: globalPath + "image_3.jpg"
        },
        {
            id: 3,
            name: "lorem ipsum",
            path: globalPath + "image_4.jpg"
        },
        // {
        //     id: 3,
        //     name: "lorem ipsum",
        //     path: globalPath + "iamge_slawek.jpeg"
        // }
    ],
    galleryTop: document.getElementById("top_images"),
    galleryPrimary: document.getElementById("primary_image")
}



function gen(id){
    obj.currentId = id;
    obj.currentId = Number(obj.currentId)
    if (obj.currentId === 0) {
        obj.firstId = Number(obj.gallery.length) - 1;
    } else {
        obj.firstId = Number(obj.currentId) - 1;
    }

    if (obj.currentId === obj.gallery.length - 1) {
        obj.lastId = 0;
    } else {
        obj.lastId = Number(obj.currentId) + 1;
    }

    console.log(obj);

    obj.galleryTop.innerHTML = "";
    obj.galleryPrimary.innerHTML = "";


    function addToTop(element) {
        obj.galleryTop.appendChild(element);
    }

    let newFrame = document.createElement("div");
    newFrame.classList.add("top_images_item");

    let newImgPlc = document.createElement("div");
    newImgPlc.classList.add("img");
    newImgPlc.setAttribute('onClick', "gen(" + obj.firstId + ");");
    newImgPlc.style.backgroundImage = "url('" + obj.gallery[obj.firstId].path + "')";

    newFrame.appendChild(newImgPlc);

    addToTop(newFrame);

    newFrame = document.createElement("div");
    newFrame.classList.add("top_images_item");

    newImgPlc = document.createElement("div");
    newImgPlc.classList.add("img");
    newImgPlc.style.backgroundImage = "url('" + obj.gallery[obj.currentId].path + "')";

    newFrame.appendChild(newImgPlc);

    addToTop(newFrame);

    newFrame = document.createElement("div");
    newFrame.classList.add("top_images_item");

    newImgPlc = document.createElement("div");
    newImgPlc.classList.add("img");
    newImgPlc.setAttribute('onClick', "gen(" + obj.lastId + ");");
    newImgPlc.style.backgroundImage = "url('" + obj.gallery[obj.lastId].path + "')";

    newFrame.appendChild(newImgPlc);

    addToTop(newFrame);

    let newImg = document.createElement("img");
    newImg.setAttribute('src', obj.gallery[obj.currentId].path);

    obj.galleryPrimary.appendChild(newImg);
}

if (obj.currentId === null) {
    obj.currentId = Number((Math.random() * (obj.gallery.length - 1))).toFixed();

    obj.currentId = Number(obj.currentId);

    if (obj.currentId === 0) {
        obj.firstId = Number(obj.gallery.length) - 1;
    } else {
        obj.firstId = Number(obj.currentId) - 1;
    }

    if (obj.currentId === obj.gallery.length - 1) {
        obj.lastId = 0;
    } else {
        obj.lastId = Number(obj.currentId) + 1;
    }
    gen(obj.currentId);
}

function prev(){
    gen(obj.lastId);
}
function next(){
    gen(obj.firstId);
}