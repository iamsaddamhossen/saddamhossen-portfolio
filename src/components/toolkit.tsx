"use client";

const skills = [
  "WordPress",
  "Gutenberg Blocks",
  "Genesis Framework",
  "ACF",
  "WPForms",
  "Custom Plugins",
  "SEO Optimization",
  "Performance Tuning",
];

export function Toolkit() {
  return (
    <section className="py-24 bg-gray-50">
      <div className="max-w-[1200px] mx-auto px-6 md:px-10">
        <h2 className="text-4xl font-bold text-gray-900 mb-12 text-center">
          My Toolkit
        </h2>

        <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
          {skills.map((skill) => (
            <div
              key={skill}
              className="p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex items-center justify-center font-semibold text-gray-800 text-center"
            >
              {skill}
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
