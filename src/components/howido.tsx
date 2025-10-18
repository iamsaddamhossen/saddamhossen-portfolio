"use client";

import {
  FaAccessibleIcon,
  FaBolt,
  FaCogs,
  FaFileAlt,
  FaRocket,
} from "react-icons/fa";

const points = [
  {
    title: "Custom-Built Solutions",
    description:
      "I create websites tailored to your business, avoiding bloated themes.",
    icon: FaCogs,
  },
  {
    title: "Minimal & Optimized Plugins",
    description:
      "Use only what’s necessary; unique functionality is built from scratch.",
    icon: FaBolt,
  },
  {
    title: "Easy Content Editing",
    description:
      "CMS experience is clean and simple, so you can manage content yourself.",
    icon: FaFileAlt,
  },
  {
    title: "Performance & Speed",
    description:
      "Fast-loading websites that convert better and rank higher on search engines.",
    icon: FaRocket,
  },
  {
    title: "Accessibility",
    description: "Websites follow WCAG 2.1 guidelines for all users.",
    icon: FaAccessibleIcon,
  },
];

export function HowIDo() {
  return (
    <div className="max-w-[1200px] mx-auto px-6 md:px-10">
      <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-16 text-center">
        How I Develop Websites
      </h2>

      <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
        {points.map((p, i) => {
          const Icon = p.icon;
          return (
            <div
              key={i}
              className="flex gap-5 items-start p-6 rounded-xl bg-gray-50 shadow-md hover:shadow-xl transition-shadow duration-300"
            >
              <Icon className="text-[#23A7BF] text-4xl flex-shrink-0 mt-1" />
              <div>
                <h3 className="font-semibold text-xl md:text-2xl mb-2 text-gray-900">
                  {p.title}
                </h3>
                <p className="text-gray-700 text-base md:text-lg">
                  {p.description}
                </p>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
}
