var OurValues = [
    {id:1, label:"Tranaparency", desc:"Support My School is dedicated to promoting transparency in Nepal's educational budget. Through our web platform, we strive to make budgetary information accessible and comprehensible to all stakeholders, fostering trust and accountability in the education sector. Our commitment to transparency empowers individuals to scrutinize fund allocation, track expenditures, and engage in data-driven discussions, ultimately contributing to better resource management and improved educational outcomes for students across Nepal."},
    {id:2, label:"Accountability", desc: "Support My School is committed to holding all stakeholders accountable for their actions and decisions within the education sector, ensuring that responsible parties are answerable for their roles in the system."}, 
    {id:3, label:"Civic Engagement", desc:"The organization believes in the importance of active participation and involvement of citizens, parents, teachers, and students in improving the quality of education in Nepal."},
    {id:4, label:"Innovation", desc:"Support My School embraces innovation and technology as tools to drive positive change and improvement in the education sector, constantly seeking creative solutions to address challenges."}, 
    {id:5, label:"Equality and Inclusivity", desc:"The organization is dedicated to serving all public schools in Nepal, regardless of their location or resources, and values inclusivity by ensuring that every school has a voice and an opportunity to collaborate."},
    {id: 6, label: "Empowerment", desc:"Support My School seeks to empower schools, teachers, students, and parents by providing them with a platform to voice their concerns and actively participate in the improvement of education."},
]

const li = document.getElementById("items")
const Desc = document.getElementById("desc");
const Listwrapper = document.getElementById("list_wrapper");

OurValues.forEach((values, index, array)=>{
    let list = document.createElement('li');
    let Para = document.createElement('p');
    list.innerHTML = values.label;
    Para.innerHTML = values.desc;

    document.getElementById("list_wrapper").appendChild(list)
    document.getElementById("list_wrapper").appendChild(Para)
    
})