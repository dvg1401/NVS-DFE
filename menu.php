<!-- school -->
<div @click="toggleFirstFloor" class="directory-container">
    <div v-if="!isVisible1" class="triangle schooltr"></div>
    <div>
        <div v-if="isVisible1" class="triangle-down"></div>
    </div>
    <div id="school">Grundschule Waltersdorf</div>
</div>
<!-- schoolyear-->
<div @click="toggleSchoolYear" v-if="isVisible1" class="directory-container">
    <div v-if="!isVisible2"class="triangle yeartr"></div>
    <div>
        <div v-if="isVisible2" class="triangle-down yeartr-down"></div>
    </div>
    <div id="year">Schuljahr 2020/21</div>
</div>
<div v-if="isVisible2">
    <!-- subjects -->
    <div @click="showSubjects = !showSubjects"  class="directory-container">
        <div v-if="!showSubjects" class="triangle subjecttr"></div>
        <div v-if="showSubjects" class="subjecttr-down">
            <div class="triangle-down"></div>
        </div>
        <div id="subject">Fächer</div>
    </div>
    <div v-if="showSubjects" id="subjects" class="subjects-teachers-classes">
        <div class="school-components"style="">
            <div class="square"></div>
            <div>Mathe</div>
        </div>
        <div class="school-components"style="">
            <div class="square"></div>
            <div>Sachkunde</div>
        </div>
    </div>
    <!-- teachers -->
    <div @click="showTeachers = !showTeachers" class="directory-container">
        <div v-if="!showTeachers" class="triangle teacherstr"></div>
        <div v-if="showTeachers" class="teacherstr-down" >
            <div class="triangle-down"></div>
        </div>
        <div id="teacher">Lehrer</div>
    </div>
    <div v-if="showTeachers" id="teachers" class="subjects-teachers-classes">
        <div class="school-components">
            <div class="square"></div>
            <div>Große, Michael</div>
        </div>
    </div>
    <!-- classes -->
    <div @click="showClasses = !showClasses" class="directory-container">
        <div v-if="!showClasses" class="triangle classestr"></div>
        <div v-if="showClasses" class="classestr-down">
            <div class="triangle-down"></div>
        </div>
        <div id="classes">Klassen</div>
    </div>
    <div v-if="showClasses" class="subjects-teachers-classes">
            <div @click="toggleStudentsofClass($event)" class="school-components">
                <div v-if="!showStudentsofClass" class="triangle classestr"></div>
                <div v-if="showStudentsofClass" class="classestr-down">
                    <div class="triangle-down"></div>
                </div>
                <div>3b</div>
            </div>
            <div v-if="showStudentsofClass" class="students">
                <div class="square"></div>
                <div>Seifert, Marius</div>
            </div>  
    </div>
</div>